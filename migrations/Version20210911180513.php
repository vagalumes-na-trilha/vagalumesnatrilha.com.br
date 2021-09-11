<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210911180513 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE tipo_de_objetivo_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tipo_de_trilha_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE trilha_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE tipo_de_objetivo (id INT NOT NULL, descricao VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE tipo_de_trilha (id INT NOT NULL, descricao VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE trilha (id INT NOT NULL, nome VARCHAR(255) NOT NULL, descricao TEXT DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE tipo_de_objetivo_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tipo_de_trilha_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE trilha_id_seq CASCADE');
        $this->addSql('DROP TABLE tipo_de_objetivo');
        $this->addSql('DROP TABLE tipo_de_trilha');
        $this->addSql('DROP TABLE trilha');
    }
}
