<?php

declare(strict_types=1);

namespace izi\prestashop\Installer;

use izi\prestashop\Installer\Database\MigrationInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @deprecated
 */
interface DatabaseMigrationInterface extends MigrationInterface
{
}
