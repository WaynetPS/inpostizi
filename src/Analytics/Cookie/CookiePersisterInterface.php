<?php

declare(strict_types=1);

namespace izi\prestashop\Analytics\Cookie;

use Symfony\Component\HttpFoundation\Request;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface CookiePersisterInterface
{
    public function persist(Request $request): void;
}
