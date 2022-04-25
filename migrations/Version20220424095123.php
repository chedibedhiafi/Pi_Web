<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220424095123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY id_blog_cfk');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY gdjfdj');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY id_source_cfk');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY Fk_Event');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE historiquestock');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE rate');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE vote');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY fk_user');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY fk_pointdevente');
        $this->addSql('ALTER TABLE employe CHANGE id_pointdevente id_pointdevente INT DEFAULT NULL');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9BF396750 FOREIGN KEY (id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B9475391BF FOREIGN KEY (id_pointdevente) REFERENCES pointdevente (reference)');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY test');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY produits_ibfk_1');
        $this->addSql('ALTER TABLE produits CHANGE id_categorie id_categorie INT DEFAULT NULL, CHANGE id_promotion id_promotion INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8CC9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C4128C1F6 FOREIGN KEY (id_promotion) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY fk_idproduit');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY fk_idPointDeVente');
        $this->addSql('ALTER TABLE stock DROP quantite');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B365660F7384557 FOREIGN KEY (id_produit) REFERENCES produits (id)');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B365660475391BF FOREIGN KEY (id_pointdevente) REFERENCES pointdevente (reference)');
        $this->addSql('ALTER TABLE stock RENAME INDEX id_pointdevente TO IDX_4B365660475391BF');
        $this->addSql('ALTER TABLE utilisateur ADD activation_token VARCHAR(50) DEFAULT NULL, CHANGE tentative tentative INT NOT NULL, CHANGE unlock_date unlock_date DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, sujet VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, contenu TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE client (Client_Id INT AUTO_INCREMENT NOT NULL, Historique_Achat VARCHAR(11) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Fk_Reserv INT NOT NULL, INDEX Fk_Reserv (Fk_Reserv), PRIMARY KEY(Client_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, date_creation DATE NOT NULL, date_envoie DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_blog INT NOT NULL, contenu TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date DATE NOT NULL, INDEX id_blog_cfk (id_blog), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE event (Event_Id INT AUTO_INCREMENT NOT NULL, Date_Event DATE NOT NULL, Titre VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Prix INT NOT NULL, Image VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Description TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(Event_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE historiquestock (reference INT AUTO_INCREMENT NOT NULL, id_produit INT NOT NULL, id_pointdevente INT NOT NULL, date DATE NOT NULL, quantite INT NOT NULL, reason VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, INDEX fk_idPointDeVenteHistorique (id_pointdevente), INDEX id_produit (id_produit, id_pointdevente), INDEX IDX_924A0199F7384557 (id_produit), PRIMARY KEY(reference)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, id_commande INT NOT NULL, frais_livraison DOUBLE PRECISION NOT NULL, etat_livraison INT NOT NULL, num_livreur INT NOT NULL, INDEX gdjfdj (id_commande), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rate (Rate_Id INT AUTO_INCREMENT NOT NULL, Event_Id INT NOT NULL, Client_Id INT NOT NULL, Sum DOUBLE PRECISION NOT NULL, PRIMARY KEY(Rate_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservation (Reserv_Id INT AUTO_INCREMENT NOT NULL, Nb_Places INT NOT NULL, Date_Achat DATE NOT NULL, Total INT NOT NULL, FK_Event INT DEFAULT NULL, INDEX Fk_Event (FK_Event), PRIMARY KEY(Reserv_Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vote (id INT AUTO_INCREMENT NOT NULL, id_source INT NOT NULL, type INT NOT NULL, INDEX id_source_cfk (id_source), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT id_blog_cfk FOREIGN KEY (id_blog) REFERENCES blog (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE historiquestock ADD CONSTRAINT fk_idProduitHistorique FOREIGN KEY (id_produit) REFERENCES stock (id_produit) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE historiquestock ADD CONSTRAINT fk_idPointDeVenteHistorique FOREIGN KEY (id_pointdevente) REFERENCES stock (id_pointdevente) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT gdjfdj FOREIGN KEY (id_commande) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT Fk_Event FOREIGN KEY (FK_Event) REFERENCES event (Event_Id)');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT id_source_cfk FOREIGN KEY (id_source) REFERENCES commentaire (id)');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B9BF396750');
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B9475391BF');
        $this->addSql('ALTER TABLE employe CHANGE id_pointdevente id_pointdevente INT NOT NULL');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT fk_user FOREIGN KEY (id) REFERENCES utilisateur (id) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT fk_pointdevente FOREIGN KEY (id_pointdevente) REFERENCES pointdevente (reference) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8CC9486A13');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C4128C1F6');
        $this->addSql('ALTER TABLE produits CHANGE id_categorie id_categorie INT NOT NULL, CHANGE id_promotion id_promotion INT NOT NULL');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT test FOREIGN KEY (id_categorie) REFERENCES categorie (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT produits_ibfk_1 FOREIGN KEY (id_promotion) REFERENCES promotion (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_4B365660F7384557');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_4B365660475391BF');
        $this->addSql('ALTER TABLE stock ADD quantite INT NOT NULL');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT fk_idproduit FOREIGN KEY (id_produit) REFERENCES produits (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT fk_idPointDeVente FOREIGN KEY (id_pointdevente) REFERENCES pointdevente (reference) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stock RENAME INDEX idx_4b365660475391bf TO id_pointdevente');
        $this->addSql('ALTER TABLE utilisateur DROP activation_token, CHANGE tentative tentative INT DEFAULT 0 NOT NULL, CHANGE unlock_date unlock_date DATE DEFAULT \'\'\'2000-01-01\'\'\' NOT NULL');
    }
}
