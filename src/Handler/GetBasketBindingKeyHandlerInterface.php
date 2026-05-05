<?php

declare(strict_types=1);

namespace izi\prestashop\Handler;

use izi\prestashop\Command\GetBasketBindingKeyCommand;
use izi\prestashop\Handler\Result\BasketBindingKey;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface GetBasketBindingKeyHandlerInterface
{
    public function __invoke(GetBasketBindingKeyCommand $command): BasketBindingKey;
}
