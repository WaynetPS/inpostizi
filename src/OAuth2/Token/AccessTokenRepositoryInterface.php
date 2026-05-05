<?php

declare(strict_types=1);

namespace izi\prestashop\OAuth2\Token;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface AccessTokenRepositoryInterface
{
    public function getToken(): ?AccessTokenInterface;

    public function saveToken(AccessTokenInterface $accessToken);

    public function deleteToken();
}
