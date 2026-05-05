<?php

declare(strict_types=1);

namespace izi\prestashop\Hook\Exception;

if (!defined('_PS_VERSION_')) {
    exit;
}

class HookNotFoundException extends \RuntimeException implements HookExceptionInterface
{
    public static function create(string $hookName): self
    {
        return new self(\sprintf('Hook "%s" was not found. It may be unavailable in the current context.', $hookName));
    }
}
