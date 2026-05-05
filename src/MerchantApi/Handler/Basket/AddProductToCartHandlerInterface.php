<?php

namespace izi\prestashop\MerchantApi\Handler\Basket;

use izi\prestashop\MerchantApi\Command\Basket\AddProductToCartCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface AddProductToCartHandlerInterface
{
    public function __invoke(AddProductToCartCommand $command);
}
