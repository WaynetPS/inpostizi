<?php

declare(strict_types=1);

namespace izi\prestashop\OAuth2\Grant;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ClientCredentialsGrant extends AbstractGrant
{
    public const IDENTIFIER = 'client_credentials';

    public function getIdentifier(): string
    {
        return self::IDENTIFIER;
    }
}
