<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Handler\Order;

use izi\prestashop\MerchantApi\Command\Order\UpdateCartMessageCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateCartMessageHandlerInterface
{
    public function __invoke(UpdateCartMessageCommand $command);
}
