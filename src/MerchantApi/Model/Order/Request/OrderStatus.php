<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Model\Order\Request;

use izi\prestashop\Enum\StringEnum;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @method static self OrderRejected()
 */
final class OrderStatus extends StringEnum
{
    private const ORDER_REJECTED = 'ORDER_REJECTED';
}
