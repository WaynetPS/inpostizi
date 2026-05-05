<?php

declare(strict_types=1);

namespace izi\prestashop\CacheClearer;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface CacheClearerInterface
{
    public function clear();
}
