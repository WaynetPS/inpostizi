<?php

declare(strict_types=1);

namespace izi\prestashop\Hook;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface WidgetParametersProviderInterface
{
    public function getParameters(?string $hookName, array $parameters): array;
}
