<?php

declare(strict_types=1);

namespace izi\prestashop\Webservice\Model;

if (!defined('_PS_VERSION_')) {
    exit;
}

if (class_exists(\BaseLinkerOrder::class, false)) {
    class InPostOrder extends \BaseLinkerOrder
    {
        use InPostOrderTrait;
    }
} else {
    class InPostOrder extends \Order
    {
        use InPostOrderTrait;
    }
}
