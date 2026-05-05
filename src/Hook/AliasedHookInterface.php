<?php

declare(strict_types=1);

namespace izi\prestashop\Hook;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface AliasedHookInterface extends HookInterface
{
    /**
     * @return array<string, VersionRange|null>
     */
    public static function getAliases(): array;
}
