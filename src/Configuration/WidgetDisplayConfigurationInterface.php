<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration;

use izi\prestashop\View\Widget\WidgetConfigurationInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface WidgetDisplayConfigurationInterface
{
    public function isDisplayed(): bool;

    public function getWidgetConfiguration(): WidgetConfigurationInterface;

    /**
     * @return iterable<string, string> CSS values by property
     */
    public function getHtmlStyles();
}
