<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210903233021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE carrossel_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE carrossel (id INT NOT NULL, arquivo VARCHAR(255) NOT NULL, titulo VARCHAR(255) NOT NULL, texto VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, datahora_inicio TIMESTAMP(0) WITH TIME ZONE NOT NULL, datahora_fim TIMESTAMP(0) WITH TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE carrossel_id_seq CASCADE');
        $this->addSql('DROP TABLE carrossel');
    }
}
