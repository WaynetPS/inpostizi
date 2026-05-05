<?php

declare(strict_types=1);

namespace izi\prestashop\PromoCode\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class CouldNotAddPromoCodeException extends \RuntimeException implements PromoCodeExceptionInterface
{
    public static function create(?\Throwable $previous = null): self
    {
        return new self('Promo code could not be added to cart.', 0, $previous);
    }
}
