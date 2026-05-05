<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class BasketNotFoundException extends ResourceNotFoundException
{
    public const ERROR_CODE = 'BASKET_NOT_FOUND';
}
