<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Product\Exception;

use izi\prestashop\BasketApp\Exception\BasketAppException;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ProductExistsException extends BasketAppException
{
    public const ERROR_CODE = 'PRODUCT_EXISTS';
}
