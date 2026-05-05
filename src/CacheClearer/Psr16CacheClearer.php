<?php

declare(strict_types=1);

namespace izi\prestashop\CacheClearer;

use Psr\SimpleCache\CacheInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class Psr16CacheClearer implements CacheClearerInterface
{
    /**
     * @var CacheInterface
     */
    private $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function clear(): void
    {
        if ($this->cache->clear()) {
            return;
        }

        throw new \RuntimeException('Failed to clear cache.');
    }
}
