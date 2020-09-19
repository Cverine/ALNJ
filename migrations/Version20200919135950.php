<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200919135950 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE registration (id INT AUTO_INCREMENT NOT NULL, member_id INT NOT NULL, activity_id INT NOT NULL, status VARCHAR(100) NOT NULL, policy_agreed TINYINT(1) NOT NULL, image_right_agreed TINYINT(1) NOT NULL, emergency_agreed TINYINT(1) NOT NULL, insurance_info_agreed TINYINT(1) NOT NULL, is_paid TINYINT(1) NOT NULL, is_validated TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE member (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, section VARCHAR(255) NOT NULL, father_name VARCHAR(255) DEFAULT NULL, mother_name VARCHAR(255) DEFAULT NULL, email VARCHAR(100) NOT NULL, phone VARCHAR(10) NOT NULL, role VARCHAR(50) NOT NULL, membership_at DATETIME DEFAULT NULL, is_validated TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grade (id INT AUTO_INCREMENT NOT NULL, level VARCHAR(10) NOT NULL, teacher VARCHAR(255) NOT NULL, school_year VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activity (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, level VARCHAR(100) NOT NULL, leader VARCHAR(255) NOT NULL, day VARCHAR(50) NOT NULL, start_hour TIME NOT NULL, end_hour TIME NOT NULL, place VARCHAR(255) NOT NULL, max_participant INT NOT NULL, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE activity');
        $this->addSql('DROP TABLE grade');
        $this->addSql('DROP TABLE member');
        $this->addSql('DROP TABLE registration');
    }
}
