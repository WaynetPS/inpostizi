<?php

declare(strict_types=1);

namespace izi\prestashop\View\Templating;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface RendererInterface
{
    public function render(string $name, array $parameters = []): string;
}
