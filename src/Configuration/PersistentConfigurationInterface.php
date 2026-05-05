<?php

declare(strict_types=1);

namespace izi\prestashop\Configuration;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @template T of object
 *
 * @mixin T
 *
 * @method persist(object $configuration)
 */
interface PersistentConfigurationInterface
{
    /**
     * @return T in memory representation of the configuration settings
     */
    public function copy();
}
