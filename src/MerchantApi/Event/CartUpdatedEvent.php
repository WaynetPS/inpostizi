<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Event;

use izi\prestashop\Event\Event;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class CartUpdatedEvent extends Event
{
    /**
     * @var \Cart
     */
    private $cart;

    public function __construct(\Cart $cart)
    {
        $this->cart = $cart;
    }

    public function getCart(): \Cart
    {
        return $this->cart;
    }
}
