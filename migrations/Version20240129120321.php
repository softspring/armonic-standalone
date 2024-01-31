<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240129120321 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create users';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id CHAR(13) NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(50) DEFAULT NULL, surname VARCHAR(80) DEFAULT NULL, salt VARCHAR(255) DEFAULT NULL, password_encoded VARCHAR(255) DEFAULT NULL, password_request_token VARCHAR(180) DEFAULT NULL, password_requested_at INT UNSIGNED DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, confirmed_at INT UNSIGNED DEFAULT NULL, is_admin TINYINT(1) DEFAULT 0 NOT NULL, is_super_admin TINYINT(1) DEFAULT 0 NOT NULL, last_login INT UNSIGNED DEFAULT NULL, locale CHAR(5) DEFAULT NULL, avatar_url VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D6497561F885 (password_request_token), UNIQUE INDEX UNIQ_8D93D649C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
    }
}
