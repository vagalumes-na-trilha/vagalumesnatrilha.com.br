<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210911182557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE uf_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE uf (id INT NOT NULL, sigla VARCHAR(2) NOT NULL, nome VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE trilha ADD tipo_de_trilha_id INT NOT NULL');
        $this->addSql('ALTER TABLE trilha ADD tipo_de_objetivo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trilha ADD ufdo_objetivo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trilha ADD distancia_em_metros INT NOT NULL');
        $this->addSql('ALTER TABLE trilha ADD altitude_maxima_em_metros INT NOT NULL');
        $this->addSql('ALTER TABLE trilha ADD ascencao_positiva_em_metros INT NOT NULL');
        $this->addSql('ALTER TABLE trilha ADD nome_do_objetivo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trilha ADD municipio_do_objetivo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trilha ADD CONSTRAINT FK_321167771BB45A4C FOREIGN KEY (tipo_de_trilha_id) REFERENCES tipo_de_trilha (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE trilha ADD CONSTRAINT FK_3211677769594D81 FOREIGN KEY (tipo_de_objetivo_id) REFERENCES tipo_de_objetivo (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE trilha ADD CONSTRAINT FK_32116777272E298B FOREIGN KEY (ufdo_objetivo_id) REFERENCES uf (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_321167771BB45A4C ON trilha (tipo_de_trilha_id)');
        $this->addSql('CREATE INDEX IDX_3211677769594D81 ON trilha (tipo_de_objetivo_id)');
        $this->addSql('CREATE INDEX IDX_32116777272E298B ON trilha (ufdo_objetivo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE trilha DROP CONSTRAINT FK_32116777272E298B');
        $this->addSql('DROP SEQUENCE uf_id_seq CASCADE');
        $this->addSql('DROP TABLE uf');
        $this->addSql('ALTER TABLE trilha DROP CONSTRAINT FK_321167771BB45A4C');
        $this->addSql('ALTER TABLE trilha DROP CONSTRAINT FK_3211677769594D81');
        $this->addSql('DROP INDEX IDX_321167771BB45A4C');
        $this->addSql('DROP INDEX IDX_3211677769594D81');
        $this->addSql('DROP INDEX IDX_32116777272E298B');
        $this->addSql('ALTER TABLE trilha DROP tipo_de_trilha_id');
        $this->addSql('ALTER TABLE trilha DROP tipo_de_objetivo_id');
        $this->addSql('ALTER TABLE trilha DROP ufdo_objetivo_id');
        $this->addSql('ALTER TABLE trilha DROP distancia_em_metros');
        $this->addSql('ALTER TABLE trilha DROP altitude_maxima_em_metros');
        $this->addSql('ALTER TABLE trilha DROP ascencao_positiva_em_metros');
        $this->addSql('ALTER TABLE trilha DROP nome_do_objetivo');
        $this->addSql('ALTER TABLE trilha DROP municipio_do_objetivo');
    }
}
