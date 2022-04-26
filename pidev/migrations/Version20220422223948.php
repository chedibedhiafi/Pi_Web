<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220422223948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produitcommande ADD commande_id INT NOT NULL, ADD produit_id INT NOT NULL, ADD quantite INT NOT NULL');
        $this->addSql('ALTER TABLE produitcommande ADD CONSTRAINT FK_DC59CC7982EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE produitcommande ADD CONSTRAINT FK_DC59CC79F347EFB FOREIGN KEY (produit_id) REFERENCES produits (id)');
        $this->addSql('CREATE INDEX IDX_DC59CC7982EA2E54 ON produitcommande (commande_id)');
        $this->addSql('CREATE INDEX IDX_DC59CC79F347EFB ON produitcommande (produit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produitcommande DROP FOREIGN KEY FK_DC59CC7982EA2E54');
        $this->addSql('ALTER TABLE produitcommande DROP FOREIGN KEY FK_DC59CC79F347EFB');
        $this->addSql('DROP INDEX IDX_DC59CC7982EA2E54 ON produitcommande');
        $this->addSql('DROP INDEX IDX_DC59CC79F347EFB ON produitcommande');
        $this->addSql('ALTER TABLE produitcommande DROP commande_id, DROP produit_id, DROP quantite');
    }
}
