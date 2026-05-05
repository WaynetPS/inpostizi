<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

abstract class ApiException extends \RuntimeException
{
    abstract public function getErrorCode(): string;

    abstract public function getStatusCode(): int;
}
