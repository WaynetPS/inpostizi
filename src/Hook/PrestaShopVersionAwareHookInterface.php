<?php

declare(strict_types=1);

namespace izi\prestashop\Hook;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface PrestaShopVersionAwareHookInterface extends HookInterface
{
    public static function getVersionRange(): VersionRange;
}
