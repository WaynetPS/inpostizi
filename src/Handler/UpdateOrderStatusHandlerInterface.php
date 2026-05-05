<?php

declare(strict_types=1);

namespace izi\prestashop\Handler;

use izi\prestashop\Command\UpdateOrderStatusCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateOrderStatusHandlerInterface
{
    public function __invoke(UpdateOrderStatusCommand $command);
}
