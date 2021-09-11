<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210911180919 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {

        $this->addSql("INSERT INTO \"tipo_de_trilha\" (id, descricao) 
                            VALUES (nextval('tipo_de_trilha_id_seq'), 'trilha')");
        $this->addSql("INSERT INTO \"tipo_de_trilha\" (id, descricao) 
                            VALUES (nextval('tipo_de_trilha_id_seq'), 'circuito')");
        $this->addSql("INSERT INTO \"tipo_de_trilha\" (id, descricao) 
                            VALUES (nextval('tipo_de_trilha_id_seq'), 'travessia')");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
