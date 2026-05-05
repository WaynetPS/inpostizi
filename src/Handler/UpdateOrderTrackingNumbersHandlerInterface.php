<?php

declare(strict_types=1);

namespace izi\prestashop\Handler;

use izi\prestashop\Command\UpdateOrderTrackingNumbersCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateOrderTrackingNumbersHandlerInterface
{
    public function __invoke(UpdateOrderTrackingNumbersCommand $command);
}
