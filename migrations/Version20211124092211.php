<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211124092211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app_player (id INT AUTO_INCREMENT NOT NULL, team_id INT DEFAULT NULL, firstName VARCHAR(255) NOT NULL, lastName VARCHAR(255) NOT NULL, playerimageURI VARCHAR(255) NOT NULL, INDEX IDX_7D1A17E5296CD8AE (team_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE app_team (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, logoURI VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE app_player ADD CONSTRAINT FK_7D1A17E5296CD8AE FOREIGN KEY (team_id) REFERENCES app_team (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE app_player DROP FOREIGN KEY FK_7D1A17E5296CD8AE');
        $this->addSql('DROP TABLE app_player');
        $this->addSql('DROP TABLE app_team');
    }
}
