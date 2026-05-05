<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface AdvancedConfigurationInterface
{
    public function isDebugEnabled(): bool;
}
