<?php

declare(strict_types=1);

namespace izi\prestashop\Environment;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface EnvironmentFactoryInterface
{
    public function createEnvironment(EnvironmentType $type): EnvironmentInterface;
}
