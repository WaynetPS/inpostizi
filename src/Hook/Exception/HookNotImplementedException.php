<?php

declare(strict_types=1);

namespace izi\prestashop\Hook\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class HookNotImplementedException extends \LogicException implements HookExceptionInterface
{
    public static function create(string $hookName): self
    {
        return new self(\sprintf('Hook "%s" is not implemented.', $hookName));
    }
}
