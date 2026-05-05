<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ProductNotFoundException extends ApiException
{
    public const ERROR_CODE = 'PRODUCT_NOT_FOUND';

    public function getErrorCode(): string
    {
        return self::ERROR_CODE;
    }

    public function getStatusCode(): int
    {
        return 404;
    }

    public static function create(): self
    {
        return new self('Product not found.');
    }
}
