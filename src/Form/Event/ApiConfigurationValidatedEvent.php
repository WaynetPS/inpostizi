<?php

declare(strict_types=1);

namespace izi\prestashop\Form\Event;

use izi\prestashop\Configuration\ApiConfigurationInterface;
use izi\prestashop\Event\Event;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ApiConfigurationValidatedEvent extends Event
{
    /**
     * @var ApiConfigurationInterface
     */
    private $configuration;

    public function __construct(ApiConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getConfiguration(): ApiConfigurationInterface
    {
        return $this->configuration;
    }
}
