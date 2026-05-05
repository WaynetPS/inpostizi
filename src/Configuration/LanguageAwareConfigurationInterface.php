<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface LanguageAwareConfigurationInterface extends ShopAwareConfigurationInterface
{
    public function get(string $key, ?int $shopId = null, ?int $languageId = null);

    /**
     * @return array<int, mixed> values by language ID
     */
    public function getLocalized(string $key): array;
}
