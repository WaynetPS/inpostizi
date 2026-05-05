<?php

declare(strict_types=1);

namespace izi\prestashop\Analytics\Handler;

use izi\prestashop\Analytics\Command\UpdateCartAnalyticsCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateCartAnalyticsHandlerInterface
{
    public function __invoke(UpdateCartAnalyticsCommand $command);
}
