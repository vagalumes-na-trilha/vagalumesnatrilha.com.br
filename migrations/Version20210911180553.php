<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210911180553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO \"tipo_de_objetivo\" (id, descricao) 
                            VALUES (nextval('tipo_de_objetivo_id_seq'), 'Pico')");
        $this->addSql("INSERT INTO \"tipo_de_objetivo\" (id, descricao) 
                            VALUES (nextval('tipo_de_objetivo_id_seq'), 'Cachoeira')");
        $this->addSql("INSERT INTO \"tipo_de_objetivo\" (id, descricao) 
                            VALUES (nextval('tipo_de_objetivo_id_seq'), 'Rio')");
        $this->addSql("INSERT INTO \"tipo_de_objetivo\" (id, descricao) 
                            VALUES (nextval('tipo_de_objetivo_id_seq'), 'localidade')");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
