<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260614064655 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, coded VARCHAR(10) NOT NULL, nomd VARCHAR(100) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE etudiant (id INT AUTO_INCREMENT NOT NULL, cne VARCHAR(20) NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE module (id INT AUTO_INCREMENT NOT NULL, codem VARCHAR(10) NOT NULL, intituem VARCHAR(100) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE professeur (id INT AUTO_INCREMENT NOT NULL, nomp VARCHAR(50) NOT NULL, prenomp VARCHAR(50) NOT NULL, emailp VARCHAR(50) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, codes VARCHAR(10) NOT NULL, capacite INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP TABLE module');
        $this->addSql('DROP TABLE professeur');
        $this->addSql('DROP TABLE salle');
    }
}
