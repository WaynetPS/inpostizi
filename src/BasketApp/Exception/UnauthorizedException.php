<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class UnauthorizedException extends BasketAppException
{
    public const ERROR_CODE = 'UNAUTHORIZED';
}
