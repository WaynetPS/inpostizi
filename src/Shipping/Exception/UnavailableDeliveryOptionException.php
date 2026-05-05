<?php

declare(strict_types=1);

namespace izi\prestashop\Shipping\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class UnavailableDeliveryOptionException extends \RuntimeException
{
    public static function for(\Carrier $carrier): self
    {
        return new self(\sprintf('Delivery option "%s" is not available for the cart.', $carrier->name));
    }
}
