<?php

declare(strict_types=1);

namespace izi\prestashop\Command\Config;

use izi\prestashop\Configuration\GuiConfigurationInterface;
use izi\prestashop\Handler\Config\UpdateGuiConfigurationHandler;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @see UpdateGuiConfigurationHandler
 */
final class UpdateGuiConfigurationCommand
{
    /**
     * @var GuiConfigurationInterface
     */
    private $configuration;

    public function __construct(GuiConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getConfiguration(): GuiConfigurationInterface
    {
        return $this->configuration;
    }
}
