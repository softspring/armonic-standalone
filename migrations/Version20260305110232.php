<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260305110232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create user table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE user (id CHAR(13) NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(50) DEFAULT NULL, surname VARCHAR(80) DEFAULT NULL, salt VARCHAR(255) DEFAULT NULL, password_encoded VARCHAR(255) DEFAULT NULL, password_request_token VARCHAR(180) DEFAULT NULL, password_requested_at INT UNSIGNED DEFAULT NULL, avatar_url VARCHAR(255) DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, confirmed_at INT UNSIGNED DEFAULT NULL, is_admin TINYINT DEFAULT 0 NOT NULL, is_super_admin TINYINT DEFAULT 0 NOT NULL, last_login INT UNSIGNED DEFAULT NULL, locale CHAR(5) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D6497561F885 (password_request_token), UNIQUE INDEX UNIQ_8D93D649C05FB297 (confirmation_token), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE cms_content_blog_article ADD author_id CHAR(13) DEFAULT NULL');
        $this->addSql('ALTER TABLE cms_content_blog_article ADD CONSTRAINT FK_7BB3D8EFF675F31B FOREIGN KEY (author_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_7BB3D8EFF675F31B ON cms_content_blog_article (author_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE cms_content_blog_article DROP FOREIGN KEY FK_7BB3D8EFF675F31B');
        $this->addSql('DROP INDEX IDX_7BB3D8EFF675F31B ON cms_content_blog_article');
        $this->addSql('ALTER TABLE cms_content_blog_article DROP author_id');
    }
}
