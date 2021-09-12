<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210912113806 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'AC', 'Acre')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'AL', 'Alagoas')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'AP', 'Amapá')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'AM', 'Amazonas')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'BA', 'Bahia')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'CE', 'Ceará')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'DF', 'Distrito Federal')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'ES', 'Espírito Santo')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'GO', 'Goiás')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'MA', 'Maranhão')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'MT', 'Mato Grosso')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'MS', 'Mato Grosso do Sul')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'MG', 'Minas Gerais')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'PA', 'Pará')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'PB', 'Paraíba')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'PR', 'Paraná')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'PE', 'Pernambuco')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'PI', 'Piauí')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'RJ', 'Rio de Janeiro')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'RN', 'Rio Grande do Norte')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'RS', 'Rio Grande do Sul')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'RO', 'Rondônia')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'RR', 'Roraima')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'SC', 'Santa Catarina')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'SP', 'São Paulo')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'SE', 'Sergipe')");
        $this->addSql("insert into \"uf\" (id, sigla, nome) values (nextval('uf_id_seq'), 'TO', 'Tocantins')");


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
