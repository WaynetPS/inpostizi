<?php

declare(strict_types=1);

namespace izi\prestashop\OAuth2\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class UnexpectedValueException extends \UnexpectedValueException implements OAuth2ExceptionInterface
{
}
