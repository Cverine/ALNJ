<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200919141701 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE registration ADD member_id_id INT NOT NULL, ADD activity_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A71D650BA4 FOREIGN KEY (member_id_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE registration ADD CONSTRAINT FK_62A8A7A76146A8E4 FOREIGN KEY (activity_id_id) REFERENCES activity (id)');
        $this->addSql('CREATE INDEX IDX_62A8A7A71D650BA4 ON registration (member_id_id)');
        $this->addSql('CREATE INDEX IDX_62A8A7A76146A8E4 ON registration (activity_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A71D650BA4');
        $this->addSql('ALTER TABLE registration DROP FOREIGN KEY FK_62A8A7A76146A8E4');
        $this->addSql('DROP INDEX IDX_62A8A7A71D650BA4 ON registration');
        $this->addSql('DROP INDEX IDX_62A8A7A76146A8E4 ON registration');
        $this->addSql('ALTER TABLE registration DROP member_id_id, DROP activity_id_id');
    }
}
