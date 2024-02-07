<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240207154853 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add author for CMS articles';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE cms_content_blog_article ADD author_id CHAR(13) DEFAULT NULL');
        $this->addSql('ALTER TABLE cms_content_blog_article ADD CONSTRAINT FK_7BB3D8EFF675F31B FOREIGN KEY (author_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_7BB3D8EFF675F31B ON cms_content_blog_article (author_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE cms_content_blog_article DROP FOREIGN KEY FK_7BB3D8EFF675F31B');
        $this->addSql('DROP INDEX IDX_7BB3D8EFF675F31B ON cms_content_blog_article');
        $this->addSql('ALTER TABLE cms_content_blog_article DROP author_id');
    }
}
