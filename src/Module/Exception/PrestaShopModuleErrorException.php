<?php

declare(strict_types=1);

namespace izi\prestashop\Module\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class PrestaShopModuleErrorException extends \PrestaShopException implements ModuleErrorInterface
{
}
