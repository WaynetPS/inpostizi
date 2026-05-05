<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class MerchantDisabledException extends BasketAppException
{
    public const ERROR_CODE = 'MERCHANT_DISABLE';
}
