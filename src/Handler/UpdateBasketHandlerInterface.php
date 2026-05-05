<?php

declare(strict_types=1);

namespace izi\prestashop\Handler;

use izi\prestashop\Command\UpdateBasketCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateBasketHandlerInterface
{
    public function __invoke(UpdateBasketCommand $command);
}
