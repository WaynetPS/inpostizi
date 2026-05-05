<?php

declare(strict_types=1);

namespace izi\prestashop\OAuth2\Authentication;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ClientCredentialsInterface
{
    public function getClientId(): string;

    public function getClientSecret(): ?string;
}
