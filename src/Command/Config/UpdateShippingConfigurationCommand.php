<?php

declare(strict_types=1);

namespace izi\prestashop\Command\Config;

use izi\prestashop\Configuration\ShippingConfigurationInterface;
use izi\prestashop\Handler\Config\UpdateShippingConfigurationHandler;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @see UpdateShippingConfigurationHandler
 */
final class UpdateShippingConfigurationCommand
{
    /**
     * @var ShippingConfigurationInterface
     */
    private $configuration;

    public function __construct(ShippingConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getConfiguration(): ShippingConfigurationInterface
    {
        return $this->configuration;
    }
}
