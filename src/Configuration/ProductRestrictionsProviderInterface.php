<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration;

use izi\prestashop\Configuration\DTO\Product\ProductRestrictions;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ProductRestrictionsProviderInterface
{
    public function getProductRestrictions(): ?ProductRestrictions;
}
