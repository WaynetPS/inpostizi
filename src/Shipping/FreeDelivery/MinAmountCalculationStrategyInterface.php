<?php

declare(strict_types=1);

namespace izi\prestashop\Shipping\FreeDelivery;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface MinAmountCalculationStrategyInterface
{
    /**
     * @return float|null gross amount required for free delivery or null if not applicable
     */
    public function getMinAmount(\Cart $cart, \Carrier $carrier): ?float;
}
