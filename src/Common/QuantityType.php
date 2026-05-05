<?php

declare(strict_types=1);

namespace izi\prestashop\Common;

use izi\prestashop\Enum\StringEnum;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @method static self Decimal()
 * @method static self Integer()
 */
final class QuantityType extends StringEnum
{
    private const DECIMAL = 'DECIMAL';
    private const INTEGER = 'INTEGER';
}
