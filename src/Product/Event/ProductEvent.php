<?php

declare(strict_types=1);

namespace izi\prestashop\Product\Event;

use izi\prestashop\Event\Event;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ProductEvent extends Event
{
    /**
     *  Dispatched before product is deleted.
     */
    public const DELETION = 'inpostizi.product.deletion';
    public const DELETED = 'inpostizi.product.deleted';
    public const UPDATED = 'inpostizi.product.updated';

    /**
     * @var \Product
     */
    private $product;

    public function __construct(\Product $product)
    {
        $this->product = $product;
    }

    public function getProduct(): \Product
    {
        return $this->product;
    }
}
