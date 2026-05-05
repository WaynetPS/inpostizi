<?php

declare(strict_types=1);

namespace izi\prestashop\Shipping\ProductRestriction;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ProductRestrictionDeliveryInterface
{
    /**
     * @return bool true if shipping is available based on the product carrier restrictions
     */
    public function isShippingAvailableBasedOnProductCarrierRestriction(\Carrier $carrier, \Product $product): bool;
}
