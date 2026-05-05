<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class InternalServerErrorException extends BasketAppException
{
    public const ERROR_CODE = 'INTERNAL_SERVER_ERROR';
}
