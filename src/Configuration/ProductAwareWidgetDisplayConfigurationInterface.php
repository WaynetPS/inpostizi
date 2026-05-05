<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration;

use PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductLazyArray;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ProductAwareWidgetDisplayConfigurationInterface extends WidgetDisplayConfigurationInterface
{
    public function isDisplayed(?ProductLazyArray $product = null): bool;
}
