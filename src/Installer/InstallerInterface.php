<?php

declare(strict_types=1);

namespace izi\prestashop\Installer;

use izi\prestashop\Installer\Exception\InstallerException;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface InstallerInterface
{
    /**
     * @throws InstallerException
     */
    public function install(\Module $module): void;
}
