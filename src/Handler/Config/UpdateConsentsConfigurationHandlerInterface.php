<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Config;

use izi\prestashop\Command\Config\UpdateConsentsConfigurationCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateConsentsConfigurationHandlerInterface
{
    public function __invoke(UpdateConsentsConfigurationCommand $command);
}
