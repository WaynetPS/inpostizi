<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Config;

use izi\prestashop\Command\Config\UpdateGuiConfigurationCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateGuiConfigurationHandlerInterface
{
    public function __invoke(UpdateGuiConfigurationCommand $command);
}
