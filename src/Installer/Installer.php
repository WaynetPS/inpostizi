<?php

declare(strict_types=1);

namespace izi\prestashop\Installer;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class Installer implements InstallerInterface, UninstallerInterface
{
    /**
     * @internal
     */
    public const REQUIRED_CONTAINER_PARAMS = [
        'kernel.environment',
        'kernel.debug',
        'kernel.project_dir',
        'kernel.cache_dir',
        'kernel.logs_dir',
        'database_prefix',
        'database_engine',
    ];

    /**
     * @var iterable<InstallerInterface>
     */
    private $installers;

    /**
     * @var iterable<UninstallerInterface>
     */
    private $uninstallers;

    /**
     * @param iterable<InstallerInterface> $installers
     * @param iterable<UninstallerInterface> $uninstallers
     */
    public function __construct(iterable $installers, iterable $uninstallers)
    {
        $this->installers = $installers;
        $this->uninstallers = $uninstallers;
    }

    public function install(\Module $module): void
    {
        foreach ($this->installers as $installer) {
            $installer->install($module);
        }
    }

    public function uninstall(\Module $module, bool $keepData = true): void
    {
        foreach ($this->uninstallers as $uninstaller) {
            $uninstaller->uninstall($module, $keepData);
        }
    }
}
