<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class CannotCreateOrderException extends ApiException
{
    public const ERROR_CODE = 'ORDER_NOT_CREATE';

    public function getErrorCode(): string
    {
        return self::ERROR_CODE;
    }

    public function getStatusCode(): int
    {
        return 409;
    }
}
