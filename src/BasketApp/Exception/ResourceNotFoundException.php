<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class ResourceNotFoundException extends BasketAppException
{
    public const ERROR_CODE = 'NOT_FOUND';
}
