<?php

declare(strict_types=1);

namespace izi\prestashop\PromoCode;

use izi\prestashop\PromoCode\Exception\CouldNotAddPromoCodeException;
use izi\prestashop\PromoCode\Exception\CouldNotRemovePromoCodeException;
use izi\prestashop\PromoCode\Exception\InvalidPromoCodeException;
use izi\prestashop\PromoCode\Exception\PromoCodeExceptionInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface PromoCodeManagerInterface
{
    /**
     * @return PromoCodeInterface[]
     */
    public function getPromoCodes(\Cart $cart): array;

    /**
     * @param non-empty-string $code
     *
     * @throws InvalidPromoCodeException
     * @throws CouldNotAddPromoCodeException
     * @throws PromoCodeExceptionInterface
     */
    public function addPromoCode(\Cart $cart, string $code);

    /**
     * @throws CouldNotRemovePromoCodeException
     * @throws PromoCodeExceptionInterface
     */
    public function removePromoCode(\Cart $cart, PromoCodeInterface $promoCode);
}
