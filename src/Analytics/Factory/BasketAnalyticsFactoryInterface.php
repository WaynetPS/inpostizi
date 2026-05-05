<?php

declare(strict_types=1);

namespace izi\prestashop\Analytics\Factory;

use izi\prestashop\Analytics\BasketAnalyticsInterface;
use Symfony\Component\HttpFoundation\Request;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface BasketAnalyticsFactoryInterface
{
    public function createFromRequest(Request $request): BasketAnalyticsInterface;
}
