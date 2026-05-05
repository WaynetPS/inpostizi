<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Firewall;

use izi\prestashop\BasketApp\Signature\Response\SigningKey;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface SigningKeysServiceInterface
{
    public function getSigningKey(string $version): ?SigningKey;
}
