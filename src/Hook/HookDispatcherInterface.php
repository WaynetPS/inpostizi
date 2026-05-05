<?php

declare(strict_types=1);

namespace izi\prestashop\Hook;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface HookDispatcherInterface
{
    public function dispatch(string $name, array $parameters, ?int $shopId = null);
}
