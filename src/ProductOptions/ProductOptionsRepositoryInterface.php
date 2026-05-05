<?php

declare(strict_types=1);

namespace izi\prestashop\ProductOptions;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ProductOptionsRepositoryInterface
{
    public function add(ProductOptions $options): void;

    public function find(int $productId): ?ProductOptions;

    /**
     * @return array<int, ProductOptions> options by product ID
     */
    public function findByProductIds(int ...$productIds): array;

    public function update(ProductOptions $options): void;
}
