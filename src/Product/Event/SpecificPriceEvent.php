<?php

declare(strict_types=1);

namespace izi\prestashop\Product\Event;

use izi\prestashop\Event\Event;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class SpecificPriceEvent extends Event
{
    public const CREATED = 'inpostizi.specific_price.created';
    public const DELETED = 'inpostizi.specific_price.deleted';
    public const UPDATED = 'inpostizi.specific_price.updated';

    /**
     * @var \SpecificPrice
     */
    private $price;

    public function __construct(\SpecificPrice $price)
    {
        $this->price = $price;
    }

    public function getPrice(): \SpecificPrice
    {
        return $this->price;
    }
}
