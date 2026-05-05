<?php

declare(strict_types=1);

namespace izi\prestashop\Builder\Basket;

use izi\prestashop\BasketApp\Basket\Request\Basket;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @template-extends BasketBuilderInterface<Basket>
 */
interface BasketAppRequestBuilderInterface extends BasketBuilderInterface
{
    public function build(): Basket;
}
