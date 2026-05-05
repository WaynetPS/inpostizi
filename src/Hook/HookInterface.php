<?php

declare(strict_types=1);

namespace izi\prestashop\Hook;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface HookInterface
{
    public static function getHookName(): string;

    public function execute(array $parameters);
}
