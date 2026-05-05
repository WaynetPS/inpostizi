<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface PromoCodesConfigurationInterface
{
    /**
     * @return int|null ID of {@see \CMS} that should be used as the promotion details page if no specific page has been
     *                  configured for the cart rule
     */
    public function getDefaultPromoDetailsPageId(?int $shopId = null): ?int;
}
