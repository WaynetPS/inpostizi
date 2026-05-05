<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Result;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class BasketBindingKey
{
    /**
     * @var string
     */
    private $basketId;

    /**
     * @var string
     */
    private $bindingKey;

    public function __construct(string $basketId, string $bindingKey)
    {
        $this->basketId = $basketId;
        $this->bindingKey = $bindingKey;
    }

    public function getBasketId(): string
    {
        return $this->basketId;
    }

    public function getBindingKey(): string
    {
        return $this->bindingKey;
    }
}
