<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Config;

use izi\prestashop\Command\Config\UpdateGeneralConfigurationCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateGeneralConfigurationHandlerInterface
{
    public function __invoke(UpdateGeneralConfigurationCommand $command);
}
