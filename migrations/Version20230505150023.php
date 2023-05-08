<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230505150023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formules DROP FOREIGN KEY FK_E5BA88E114041B84');
        $this->addSql('DROP TABLE menus');
        $this->addSql('DROP INDEX IDX_E5BA88E114041B84 ON formules');
        $this->addSql('ALTER TABLE formules ADD titre VARCHAR(255) NOT NULL, DROP menus_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE menus (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE formules ADD menus_id INT DEFAULT NULL, DROP titre');
        $this->addSql('ALTER TABLE formules ADD CONSTRAINT FK_E5BA88E114041B84 FOREIGN KEY (menus_id) REFERENCES menus (id)');
        $this->addSql('CREATE INDEX IDX_E5BA88E114041B84 ON formules (menus_id)');
    }
}
