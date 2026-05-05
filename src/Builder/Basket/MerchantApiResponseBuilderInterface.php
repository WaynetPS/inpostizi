<?php

declare(strict_types=1);

namespace izi\prestashop\Builder\Basket;

use izi\prestashop\MerchantApi\Model\Basket\Response\Basket;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @template-extends BasketBuilderInterface<Basket>
 */
interface MerchantApiResponseBuilderInterface extends BasketBuilderInterface
{
    public function build(): Basket;
}
