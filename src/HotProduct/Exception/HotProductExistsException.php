<?php

declare(strict_types=1);

namespace izi\prestashop\HotProduct\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class HotProductExistsException extends \RuntimeException implements HotProductExceptionInterface
{
}
