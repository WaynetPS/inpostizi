<?php

declare(strict_types=1);

namespace izi\prestashop\Hook\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class InvalidArgumentException extends \InvalidArgumentException implements HookExceptionInterface
{
}
