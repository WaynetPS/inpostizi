<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration;

use izi\prestashop\Common\BindingPlace;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface GuiConfigurationInterface
{
    /**
     * @return BindingPlace[]
     */
    public static function getSupportedBindingPlaces(): array;

    public function getDisplayConfiguration(BindingPlace $bindingPlace): WidgetDisplayConfigurationInterface;
}
