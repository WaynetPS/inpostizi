<?php

declare(strict_types=1);

namespace izi\prestashop\Product\Price;

use izi\prestashop\Common\Price;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface LowestPriceProviderInterface
{
    public function getPrice(LowestPriceQuery $query): ?Price;
}
