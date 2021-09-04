<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210904193753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO \"user\" (id, email, roles, password, nome) VALUES (nextval('user_id_seq'), 'danielfleck@gmail.com', '[\"ROLE_ADMIN\",\"ROLE_USER\"]', 
                 '$2y$13\$mmsTWsU9xf1SzXw1PTPZIuF.qi5vxc333gX4dGMDEQdlUh1juDxuG', 'Daniel Rodrigo Fleck')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
