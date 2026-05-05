<?php

declare(strict_types=1);

namespace izi\prestashop\Common;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class PriceAmount implements \JsonSerializable
{
    /**
     * @var float
     */
    private $priceAmount;

    public function __construct(float $priceAmount)
    {
        $this->priceAmount = $priceAmount;
    }

    public function getPriceAmount(): float
    {
        return $this->priceAmount;
    }

    public function jsonSerialize(): float
    {
        return $this->priceAmount;
    }
}
