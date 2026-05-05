<?php

declare(strict_types=1);

namespace izi\prestashop\Handler;

use izi\prestashop\Command\UpdateOrderAddressDeliveryCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateOrderAddressDeliveryHandlerInterface
{
    public function __invoke(UpdateOrderAddressDeliveryCommand $command);
}
