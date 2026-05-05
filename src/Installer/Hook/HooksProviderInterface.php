<?php

declare(strict_types=1);

namespace izi\prestashop\Installer\Hook;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface HooksProviderInterface
{
    /**
     * @return string[] hooks to register
     */
    public function getHookNames(): array;
}
