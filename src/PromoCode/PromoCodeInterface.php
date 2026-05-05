<?php

declare(strict_types=1);

namespace izi\prestashop\PromoCode;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface PromoCodeInterface
{
    public function getCode(): string;
}
