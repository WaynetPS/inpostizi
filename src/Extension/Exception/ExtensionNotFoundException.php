<?php

declare(strict_types=1);

namespace izi\prestashop\Extension\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class ExtensionNotFoundException extends \DomainException implements ExtensionExceptionInterface
{
}
