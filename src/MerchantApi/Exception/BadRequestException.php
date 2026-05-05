<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class BadRequestException extends ApiException
{
    public const ERROR_CODE = 'BAD_REQUEST';

    public function getErrorCode(): string
    {
        return self::ERROR_CODE;
    }

    public function getStatusCode(): int
    {
        return 400;
    }
}
