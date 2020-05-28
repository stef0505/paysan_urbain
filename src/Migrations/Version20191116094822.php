<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191116094822 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE content CHANGE title title VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe CHANGE entreprise_id entreprise_id INT DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE micropousse CHANGE entreprise_id entreprise_id INT DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE page ADD entreprise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB620A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('CREATE INDEX IDX_140AB620A4AEAFEA ON page (entreprise_id)');
        $this->addSql('ALTER TABLE recette CHANGE entreprise_id entreprise_id INT DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE content CHANGE title title VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE equipe CHANGE entreprise_id entreprise_id INT DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE micropousse CHANGE entreprise_id entreprise_id INT DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB620A4AEAFEA');
        $this->addSql('DROP INDEX IDX_140AB620A4AEAFEA ON page');
        $this->addSql('ALTER TABLE page DROP entreprise_id');
        $this->addSql('ALTER TABLE recette CHANGE entreprise_id entreprise_id INT DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
