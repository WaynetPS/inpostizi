<?php

namespace izi\prestashop\Handler\Config;

use izi\prestashop\Command\Config\UpdateCartRuleOptionsCommand;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface UpdateCartRuleOptionsHandlerInterface
{
    public function __invoke(UpdateCartRuleOptionsCommand $command);
}
