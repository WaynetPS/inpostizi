<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Config;

use izi\prestashop\Command\Config\UpdateAdvancedConfigurationCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateAdvancedConfigurationHandlerInterface
{
    public function __invoke(UpdateAdvancedConfigurationCommand $command);
}
