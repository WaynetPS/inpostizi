<?php

namespace izi\prestashop\View\Widget;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @template T of WidgetConfigurationInterface
 */
interface WidgetConfigurationResolverInterface
{
    /**
     * @return T
     */
    public function resolve(array $options): WidgetConfigurationInterface;
}
