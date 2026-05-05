<?php

declare(strict_types=1);

namespace izi\prestashop\Cache\Exception;

use Psr\SimpleCache\InvalidArgumentException as InvalidArgumentExceptionInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class InvalidArgumentException extends \InvalidArgumentException implements InvalidArgumentExceptionInterface
{
}
