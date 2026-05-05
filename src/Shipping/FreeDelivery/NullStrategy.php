<?php

declare(strict_types=1);

namespace izi\prestashop\Shipping\FreeDelivery;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class NullStrategy implements MinAmountCalculationStrategyInterface
{
    public function getMinAmount(\Cart $cart, \Carrier $carrier): ?float
    {
        return null;
    }
}
