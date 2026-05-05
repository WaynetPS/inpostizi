<?php

declare(strict_types=1);

namespace izi\prestashop;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface CommandBusInterface
{
    /**
     * @return mixed result returned by command handler
     */
    public function handle(object $command);
}
