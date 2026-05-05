<?php

declare(strict_types=1);

namespace izi\prestashop\Validator\Cart;

use Symfony\Component\Validator\Constraint;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class HasProducts extends Constraint
{
    /**
     * @var string
     */
    public $message = 'Cart is empty';
}
