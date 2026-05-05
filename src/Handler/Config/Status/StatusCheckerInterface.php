<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Config\Status;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface StatusCheckerInterface
{
    /**
     * @return string[] list of errors
     */
    public function checkStatus(): array;
}
