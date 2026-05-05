<?php

declare(strict_types=1);

namespace izi\prestashop\DependencyInjection;

use Symfony\Contracts\Service\ServiceLocatorTrait;
use Symfony\Contracts\Service\ServiceProviderInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ServiceLocator implements ServiceProviderInterface
{
    use ServiceLocatorTrait;
}
