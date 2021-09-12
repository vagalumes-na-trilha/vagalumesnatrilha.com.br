<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210912114851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE foto_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE foto (id INT NOT NULL, trilha_id INT NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_EADC3BE577F36645 ON foto (trilha_id)');
        $this->addSql('ALTER TABLE foto ADD CONSTRAINT FK_EADC3BE577F36645 FOREIGN KEY (trilha_id) REFERENCES trilha (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE trilha ADD inicio_geom geometry(GEOMETRY, 0) DEFAULT NULL');
        $this->addSql('ALTER TABLE trilha ADD fim_geom geometry(GEOMETRY, 0) DEFAULT NULL');
        $this->addSql('ALTER TABLE trilha ADD geom_do_objetivo geometry(GEOMETRY, 0) DEFAULT NULL');
        $this->addSql('ALTER TABLE trilha ADD track_geom geometry(GEOMETRY, 0) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE foto_id_seq CASCADE');
        $this->addSql('DROP TABLE foto');
        $this->addSql('ALTER TABLE trilha DROP inicio_geom');
        $this->addSql('ALTER TABLE trilha DROP fim_geom');
        $this->addSql('ALTER TABLE trilha DROP geom_do_objetivo');
        $this->addSql('ALTER TABLE trilha DROP track_geom');
    }
}
