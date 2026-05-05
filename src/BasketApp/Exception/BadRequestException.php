<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class BadRequestException extends BasketAppException
{
    public const ERROR_CODE = 'BAD_REQUEST';
}
