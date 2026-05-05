<?php

declare(strict_types=1);

namespace izi\prestashop\Builder\Order;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface OrderEventBuilderFactoryInterface
{
    public function create(int $orderId): OrderEventBuilderInterface;
}
