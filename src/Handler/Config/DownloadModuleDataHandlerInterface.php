<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Config;

use izi\prestashop\Command\Config\DownloadModuleDataCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface DownloadModuleDataHandlerInterface
{
    /**
     * @return callable streams a ZIP archive to output
     */
    public function __invoke(DownloadModuleDataCommand $command): callable;
}
