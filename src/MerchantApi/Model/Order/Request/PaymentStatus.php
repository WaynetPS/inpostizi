<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Model\Order\Request;

use izi\prestashop\Enum\StringEnum;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @method static self Authorized()
 */
final class PaymentStatus extends StringEnum
{
    private const AUTHORIZED = 'AUTHORIZED';
}
