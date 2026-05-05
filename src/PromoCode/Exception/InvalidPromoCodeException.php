<?php

declare(strict_types=1);

namespace izi\prestashop\PromoCode\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class InvalidPromoCodeException extends \DomainException implements PromoCodeExceptionInterface
{
}
