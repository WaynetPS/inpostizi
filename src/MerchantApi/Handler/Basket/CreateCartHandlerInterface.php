<?php

namespace izi\prestashop\MerchantApi\Handler\Basket;

use izi\prestashop\Entities\Cart;
use izi\prestashop\MerchantApi\Command\Basket\CreateCartCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface CreateCartHandlerInterface
{
    public function __invoke(CreateCartCommand $command): Cart;
}
