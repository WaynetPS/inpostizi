<?php

declare(strict_types=1);

abstract class BaseLinkerOrder extends \Order
{
    /**
     * @var string|null
     */
    public $bl_delivery_point_id;
}
