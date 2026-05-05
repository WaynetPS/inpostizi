<?php

declare(strict_types=1);

namespace izi\prestashop\Validator\Product;

use Symfony\Component\Validator\Constraint;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class NotInRestrictedCategory extends Constraint
{
    /**
     * @var int|null
     */
    public $shopId;

    public function getDefaultOption(): string
    {
        return 'shopId';
    }
}
