<?php

namespace izi\prestashop\Event;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class CreateShipmentRequestProcessedEvent extends Event
{
    /**
     * @var \AdminInPostConfirmedShipmentsController
     */
    private $controller;

    public function __construct(\AdminInPostConfirmedShipmentsController $controller)
    {
        $this->controller = $controller;
    }

    public function getController(): \AdminInPostConfirmedShipmentsController
    {
        return $this->controller;
    }
}
