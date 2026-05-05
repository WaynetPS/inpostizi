<?php

declare(strict_types=1);

namespace izi\prestashop\View\Asset\Provider;

use izi\prestashop\View\Asset\Provider\DTO\Assets;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface AssetsProviderInterface
{
    public function getAssets(): ?Assets;
}
