<?php

declare(strict_types=1);

namespace izi\prestashop\Common\Customer;

use izi\prestashop\Enum\StringEnum;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @method static self Person()
 * @method static self Company()
 */
final class LegalForm extends StringEnum
{
    private const PERSON = 'PERSON';
    private const COMPANY = 'COMPANY';
}
