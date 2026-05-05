<?php

declare(strict_types=1);

namespace izi\prestashop\Installer\Database;

use izi\prestashop\Analytics\BasketAnalyticsRepository;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class Version_3_2_0 extends AbstractMigration
{
    public function getVersion(): string
    {
        return '3.2.0';
    }

    public function up(): void
    {
        $this->addColumn(BasketAnalyticsRepository::TABLE_NAME, 'ttclid', 'varchar(512) DEFAULT NULL');
    }

    public function down(): void
    {
        $this->dropColumn(BasketAnalyticsRepository::TABLE_NAME, 'ttclid');
    }
}
