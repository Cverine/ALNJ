<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200919141155 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE member ADD grade_id INT NOT NULL, CHANGE name last_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA78FE19A1A8 FOREIGN KEY (grade_id) REFERENCES grade (id)');
        $this->addSql('CREATE INDEX IDX_70E4FA78FE19A1A8 ON member (grade_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA78FE19A1A8');
        $this->addSql('DROP INDEX IDX_70E4FA78FE19A1A8 ON member');
        $this->addSql('ALTER TABLE member DROP grade_id, CHANGE last_name name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
