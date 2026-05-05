<?php

declare(strict_types=1);

namespace izi\prestashop\PromoCode;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class NullAvailablePromotionsProvider implements AvailablePromotionsProviderInterface
{
    public function getAvailablePromotions(\Cart $cart): array
    {
        return [];
    }
}
