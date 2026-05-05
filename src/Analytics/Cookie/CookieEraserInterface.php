<?php

declare(strict_types=1);

namespace izi\prestashop\Analytics\Cookie;

use Symfony\Component\HttpFoundation\Request;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface CookieEraserInterface
{
    public function erase(Request $request): void;
}
