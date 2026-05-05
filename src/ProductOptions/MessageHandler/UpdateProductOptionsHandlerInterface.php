<?php

namespace izi\prestashop\ProductOptions\MessageHandler;

use izi\prestashop\ProductOptions\Message\UpdateProductOptionsCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateProductOptionsHandlerInterface
{
    public function __invoke(UpdateProductOptionsCommand $command);
}
