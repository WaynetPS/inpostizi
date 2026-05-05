<?php

declare(strict_types=1);

namespace izi\prestashop\CacheClearer;

use izi\prestashop\Repository\BasketSessionRepository;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class BindingKeysCacheClearer implements CacheClearerInterface
{
    /**
     * @var BasketSessionRepository
     */
    private $repository;

    public function __construct(BasketSessionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function clear(): void
    {
        $this->repository->resetBindingKeysCache();
    }
}
