<?php

declare(strict_types=1);

namespace izi\prestashop\Repository\Product;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface CategoryRestrictionsRepositoryInterface
{
    public function isCategoryRestricted(int $categoryId, ?int $shopId = null): bool;

    public function hasCategoryRestrictions(?int $shopId = null): bool;
}
