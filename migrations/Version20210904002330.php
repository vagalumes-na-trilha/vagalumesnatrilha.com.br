<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210904002330 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO carrossel 
                (id, arquivo, datahora_inicio, link, titulo, texto) 
            VALUES 
                (nextval('carrossel_id_seq'), 'uploads/carrossel/001.jpg', now(), '#', 'Morro do Canal', 'Piraquara-PR')");
        $this->addSql("INSERT INTO carrossel 
                (id, arquivo, datahora_inicio, link, titulo, texto) 
            VALUES 
                (nextval('carrossel_id_seq'), 'uploads/carrossel/002.jpg', now(), '#', 'Morro do Boi', 'Matinhos-PR')");
        $this->addSql("INSERT INTO carrossel 
                (id, arquivo, datahora_inicio, link, titulo, texto) 
            VALUES 
                (nextval('carrossel_id_seq'), 'uploads/carrossel/003.jpg', now(), '#', 'Morro do Teleférico', 'Matinhos-PR')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
