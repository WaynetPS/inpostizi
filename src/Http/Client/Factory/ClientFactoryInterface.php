<?php

declare(strict_types=1);

namespace izi\prestashop\Http\Client\Factory;

use Psr\Http\Client\ClientInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ClientFactoryInterface
{
    public function create(): ClientInterface;
}
