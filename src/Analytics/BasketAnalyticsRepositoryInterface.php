<?php

declare(strict_types=1);

namespace izi\prestashop\Analytics;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface BasketAnalyticsRepositoryInterface
{
    public function find(int $id): ?BasketAnalyticsInterface;

    public function save(BasketAnalytics $basketAnalytics): void;

    public function remove(int $id): void;
}
