<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Payment;

use izi\prestashop\BasketApp\Payment\Response\AvailablePaymentOptions;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface PaymentsApiClientInterface
{
    public function getAvailablePaymentOptions(): AvailablePaymentOptions;
}
