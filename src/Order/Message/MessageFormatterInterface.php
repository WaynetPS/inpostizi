<?php

declare(strict_types=1);

namespace izi\prestashop\Order\Message;

use izi\prestashop\MerchantApi\Model\Order\Request\CreateOrderRequest;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface MessageFormatterInterface
{
    public const DEFAULT_FORMAT = '{order_comments}';

    public function format(string $message, CreateOrderRequest $request): string;
}
