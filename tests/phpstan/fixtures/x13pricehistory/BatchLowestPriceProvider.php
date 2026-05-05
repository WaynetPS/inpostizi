<?php

declare(strict_types=1);

namespace x13pricehistory\Providers;

use izi\prestashop\Product\Price\X13PriceHistoryLowestPriceProvider;

/**
 * @phpstan-import-type ProductId from X13PriceHistoryLowestPriceProvider
 * @phpstan-import-type PriceInfo from X13PriceHistoryLowestPriceProvider
 */
abstract class BatchLowestPriceProvider
{
    /**
     * @var ProductId[] $productIds
     *
     * @return array<int, array<int, PriceInfo>>
     */
    abstract public function getPricesForProductList(array $productIds, ?int $shopId = null, ?int $currencyId = null, ?int $countryId = null, ?int $customerGroupId = null, bool $useTax = true): array;
}
