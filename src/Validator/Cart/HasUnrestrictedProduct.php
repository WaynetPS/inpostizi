<?php

namespace izi\prestashop\Validator\Cart;

use Symfony\Component\Validator\Constraint;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class HasUnrestrictedProduct extends Constraint
{
    public $message = 'Cart has only restricted products';
}
