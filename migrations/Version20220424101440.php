<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220424101440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pointdevente CHANGE longitude longitude VARCHAR(255) DEFAULT \'\'\'36.79919469665419\'\'\' NOT NULL, CHANGE latitude latitude VARCHAR(255) DEFAULT \'\'\'10.186024805970863\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_4B365660475391BF');
        $this->addSql('DROP INDEX id_pointdevente ON stock');
        $this->addSql('CREATE INDEX IDX_4B365660475391BF ON stock (id_pointdevente)');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B365660475391BF FOREIGN KEY (id_pointdevente) REFERENCES pointdevente (reference)');
        $this->addSql('ALTER TABLE utilisateur CHANGE tentative tentative INT NOT NULL, CHANGE unlock_date unlock_date DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pointdevente CHANGE longitude longitude VARCHAR(255) DEFAULT \'36.79919469665419\' NOT NULL, CHANGE latitude latitude VARCHAR(255) DEFAULT \'10.186024805970863\' NOT NULL');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_4B365660475391BF');
        $this->addSql('DROP INDEX idx_4b365660475391bf ON stock');
        $this->addSql('CREATE INDEX id_pointdevente ON stock (id_pointdevente)');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B365660475391BF FOREIGN KEY (id_pointdevente) REFERENCES pointdevente (reference)');
        $this->addSql('ALTER TABLE utilisateur CHANGE tentative tentative INT DEFAULT 0 NOT NULL, CHANGE unlock_date unlock_date DATE DEFAULT \'2000-01-01\' NOT NULL');
    }
}
