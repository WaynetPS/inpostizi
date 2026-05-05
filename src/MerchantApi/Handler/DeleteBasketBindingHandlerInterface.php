<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Handler;

use izi\prestashop\MerchantApi\Command\DeleteBasketBindingCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface DeleteBasketBindingHandlerInterface
{
    public function __invoke(DeleteBasketBindingCommand $command);
}
