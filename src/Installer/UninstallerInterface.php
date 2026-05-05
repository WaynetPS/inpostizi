<?php

declare(strict_types=1);

namespace izi\prestashop\Installer;

use izi\prestashop\Installer\Exception\InstallerException;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UninstallerInterface
{
    /**
     * @throws InstallerException
     */
    public function uninstall(\Module $module, bool $keepData = false): void;
}
