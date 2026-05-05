<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Config;

use izi\prestashop\Command\Config\UpdateShippingConfigurationCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateShippingConfigurationHandlerInterface
{
    public function __invoke(UpdateShippingConfigurationCommand $command);
}
