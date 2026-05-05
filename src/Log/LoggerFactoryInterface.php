<?php

declare(strict_types=1);

namespace izi\prestashop\Log;

use Psr\Log\LoggerInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface LoggerFactoryInterface
{
    public function create(string $name, array $options): LoggerInterface;
}
