<?php

declare(strict_types=1);

namespace izi\prestashop\HotProduct;

use izi\prestashop\Common\HotProduct\Product;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface HotProductDataMapperInterface
{
    public function map(HotProduct $hotProduct): Product;
}
