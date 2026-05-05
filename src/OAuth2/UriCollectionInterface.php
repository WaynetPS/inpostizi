<?php

declare(strict_types=1);

namespace izi\prestashop\OAuth2;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UriCollectionInterface
{
    public function getAuthorizationEndpointUri(): string;

    public function getTokenEndpointUri(): string;
}
