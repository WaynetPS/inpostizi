<?php

declare(strict_types=1);

namespace izi\prestashop\Common\Product;

use izi\prestashop\Enum\StringEnum;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @method static self Physical()
 * @method static self Digital()
 */
final class ProductType extends StringEnum
{
    private const PHYSICAL = 'PRODUCT';
    private const DIGITAL = 'DIGITAL';
}
