<?php

declare(strict_types=1);

namespace izi\prestashop\Cache\Exception;

use Psr\SimpleCache\CacheException;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class RuntimeException extends \RuntimeException implements CacheException
{
}
