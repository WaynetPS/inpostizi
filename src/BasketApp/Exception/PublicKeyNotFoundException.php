<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class PublicKeyNotFoundException extends ResourceNotFoundException
{
    public const ERROR_CODE = 'PUBLIC_KEY_NOT_FOUND';
}
