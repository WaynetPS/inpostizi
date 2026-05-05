<?php

declare(strict_types=1);

namespace izi\prestashop\Command;

use izi\prestashop\Handler\GetOrderConfirmationUrlHandler;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @see GetOrderConfirmationUrlHandler
 */
final class GetOrderConfirmationUrlCommand
{
    /**
     * @var string
     */
    private $basketId;

    /**
     * @param string $basketId
     */
    public function __construct(string $basketId)
    {
        $this->basketId = $basketId;
    }

    public function getBasketId(): string
    {
        return $this->basketId;
    }
}
