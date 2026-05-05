<?php

declare(strict_types=1);

abstract class InPostShipmentModel extends ObjectModel
{
    /**
     * @var int|numeric-string|null
     */
    public $id_order;

    /**
     * @var string|null
     */
    public $tracking_number;

    /**
     * @var string|null
     */
    public $date_add;
}
