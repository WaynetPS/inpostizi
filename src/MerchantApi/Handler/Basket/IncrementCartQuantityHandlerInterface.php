<?php

namespace izi\prestashop\MerchantApi\Handler\Basket;

use izi\prestashop\MerchantApi\Command\Basket\IncrementCartQuantityCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface IncrementCartQuantityHandlerInterface
{
    /**
     * @return int new quantity
     */
    public function __invoke(IncrementCartQuantityCommand $command): int;
}
