<?php

declare(strict_types=1);

namespace izi\prestashop\Http\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class RedirectionException extends \RuntimeException implements HttpExceptionInterface
{
    use HttpExceptionTrait;
}
