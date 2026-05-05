<?php

declare(strict_types=1);

namespace izi\prestashop\Handler;

use izi\prestashop\Command\GetOrderConfirmationUrlCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface GetOrderConfirmationUrlHandlerInterface
{
    public function __invoke(GetOrderConfirmationUrlCommand $command): string;
}
