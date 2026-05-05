<?php

declare(strict_types=1);

namespace izi\prestashop\Repository\Product;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface AttributeRestrictionsRepositoryInterface
{
    /**
     * @param int[] $attributeGroupIds
     */
    public function isAnyAttributeGroupRestricted(array $attributeGroupIds, ?int $shopId = null): bool;

    public function hasAttributeGroupRestrictions(?int $shopId = null): bool;
}
