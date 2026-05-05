<?php

declare(strict_types=1);

namespace izi\prestashop\BasketApp\Product\Response;

use izi\prestashop\Enum\StringEnum;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @method static self Active()
 * @method static self Inactive()
 */
final class Status extends StringEnum
{
    public const ACTIVE = 'ACTIVE';
    public const INACTIVE = 'INACTIVE';
}
