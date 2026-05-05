<?php

declare(strict_types=1);

namespace izi\prestashop\Order\Message;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ParameterDescriptorInterface
{
    /**
     * @return array<string, string> description by parameter name
     */
    public function getDescriptions(): array;
}
