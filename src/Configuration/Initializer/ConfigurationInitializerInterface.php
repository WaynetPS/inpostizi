<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration\Initializer;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ConfigurationInitializerInterface
{
    public function init();
}
