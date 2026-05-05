<?php

namespace izi\prestashop\Event;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ValidateOrderEvent extends Event
{
    /**
     * @var \Order
     */
    private $order;

    public function __construct(\Order $order)
    {
        $this->order = $order;
    }

    public function getOrder(): \Order
    {
        return $this->order;
    }
}
