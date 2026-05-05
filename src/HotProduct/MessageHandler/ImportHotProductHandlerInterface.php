<?php

declare(strict_types=1);

namespace izi\prestashop\HotProduct\MessageHandler;

use izi\prestashop\HotProduct\HotProduct;
use izi\prestashop\HotProduct\Message\ImportHotProductCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ImportHotProductHandlerInterface
{
    public function __invoke(ImportHotProductCommand $command): HotProduct;
}
