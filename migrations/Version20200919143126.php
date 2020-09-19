<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200919143126 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE member ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE registration ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7B03A8386 FOREIGN KEY (created_by_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A7896DBBDE FOREIGN KEY (updated_by_id) REFERENCES member (id)');
        $this->addSql('CREATE INDEX IDX_62A8A7A7B03A8386 ON registration (created_by_id)');
        $this->addSql('CREATE INDEX IDX_62A8A7A7896DBBDE ON registration (updated_by_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE member DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7B03A8386');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A7896DBBDE');
        $this->addSql('DROP INDEX IDX_62A8A7A7B03A8386 ON registration');
        $this->addSql('DROP INDEX IDX_62A8A7A7896DBBDE ON registration');
        $this->addSql('ALTER TABLE registration DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at');
    }
}
