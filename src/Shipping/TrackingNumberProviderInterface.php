<?php

declare(strict_types=1);

namespace izi\prestashop\Shipping;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface TrackingNumberProviderInterface
{
    /**
     * @return string[]
     */
    public function getTrackingNumbers(int $orderId): array;
}
