<?php

declare(strict_types=1);

namespace izi\prestashop\Entities;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @template T of BasketInterface
 *
 * @template-extends BasketSessionInterface<T>
 */
interface SwitchableBasketSessionInterface extends BasketSessionInterface
{
    public function switchBasket(BasketInterface $basket);

    public function wasBasketSwitched(): bool;
}
