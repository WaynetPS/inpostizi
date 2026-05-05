<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration\DTO;

use izi\prestashop\Configuration\AdvancedConfigurationInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class AdvancedConfiguration implements AdvancedConfigurationInterface
{
    /**
     * @var bool
     */
    private $debugEnabled;

    public function __construct(bool $debugEnabled = false)
    {
        $this->debugEnabled = $debugEnabled;
    }

    public function isDebugEnabled(): bool
    {
        return $this->debugEnabled;
    }

    public function setDebugEnabled(bool $debugEnabled): self
    {
        $this->debugEnabled = $debugEnabled;

        return $this;
    }
}
