<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Handler\Basket;

use izi\prestashop\Common\Basket\Notice;
use izi\prestashop\Entities\BasketInterface;
use izi\prestashop\MerchantApi\Model\Basket\Request\BasketEvent;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface BasketEventHandlerInterface
{
    public function handle(BasketInterface $basket, BasketEvent $event): ?Notice;
}
