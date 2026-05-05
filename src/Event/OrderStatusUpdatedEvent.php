<?php

declare(strict_types=1);

namespace izi\prestashop\Event;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class OrderStatusUpdatedEvent extends Event
{
    /**
     * @var int
     */
    private $orderId;

    /**
     * @var \OrderState
     */
    private $newOrderStatus;

    public function __construct(int $orderId, \OrderState $newOrderStatus)
    {
        $this->orderId = $orderId;
        $this->newOrderStatus = $newOrderStatus;
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }

    public function getNewOrderStatus(): \OrderState
    {
        return $this->newOrderStatus;
    }
}
