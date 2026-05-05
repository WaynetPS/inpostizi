<?php

declare(strict_types=1);

namespace izi\prestashop\Extension;

use izi\prestashop\Extension\Exception\ExtensionServiceException;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ExtensionsServiceInterface
{
    /**
     * @return Extension[]
     *
     * @throws ExtensionServiceException if extension data could not be fetched
     */
    public function getExtensions(): array;
}
