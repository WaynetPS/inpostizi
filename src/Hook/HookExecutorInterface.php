<?php

declare(strict_types=1);

namespace izi\prestashop\Hook;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface HookExecutorInterface
{
    /**
     * @return mixed hook result
     */
    public function execute(string $hookName, array $parameters);
}
