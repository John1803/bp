<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150204180429 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE dv_catalog_designer_translation (id INT AUTO_INCREMENT NOT NULL, foreign_key INT DEFAULT NULL, `label` VARCHAR(100) DEFAULT NULL, locale VARCHAR(20) NOT NULL, INDEX IDX_51A966907E366551 (foreign_key), UNIQUE INDEX locale_foreign_key_idx (locale, foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dv_catalog_designer (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(100) NOT NULL, created DATETIME NOT NULL, updated DATETIME NOT NULL, UNIQUE INDEX UNIQ_7EA1F23077153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dv_catalog_designer_translation ADD CONSTRAINT FK_51A966907E366551 FOREIGN KEY (foreign_key) REFERENCES dv_catalog_designer (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE dv_catalog_designer_translation DROP FOREIGN KEY FK_51A966907E366551');
        $this->addSql('DROP TABLE dv_catalog_designer_translation');
        $this->addSql('DROP TABLE dv_catalog_designer');
    }
}
