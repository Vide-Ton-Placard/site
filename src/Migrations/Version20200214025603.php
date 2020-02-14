<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200214025603 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_C53D045FF347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_produit (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE produit ADD user_id INT NOT NULL, ADD type_id INT NOT NULL, ADD date_ajout DATE NOT NULL, CHANGE prix_produit prix_produit VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27C54C8C93 FOREIGN KEY (type_id) REFERENCES type_produit (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27A76ED395 ON produit (user_id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27C54C8C93 ON produit (type_id)');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27C54C8C93');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE type_produit');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27A76ED395');
        $this->addSql('DROP INDEX IDX_29A5EC27A76ED395 ON produit');
        $this->addSql('DROP INDEX IDX_29A5EC27C54C8C93 ON produit');
        $this->addSql('ALTER TABLE produit DROP user_id, DROP type_id, DROP date_ajout, CHANGE prix_produit prix_produit NUMERIC(10, 0) NOT NULL');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom');
    }
}
