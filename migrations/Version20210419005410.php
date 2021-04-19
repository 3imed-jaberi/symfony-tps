<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210419005410 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE agence_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE voiture_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE agence (id INT NOT NULL, nom TEXT NOT NULL, telagence TEXT NOT NULL, address_ville TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE voiture (id INT NOT NULL, marque TEXT NOT NULL, coleur TEXT NOT NULL, description TEXT NOT NULL, nombre_de_place INT NOT NULL, nom_agence TEXT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE agence_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE voiture_id_seq CASCADE');
        $this->addSql('DROP TABLE agence');
        $this->addSql('DROP TABLE voiture');
    }
}
