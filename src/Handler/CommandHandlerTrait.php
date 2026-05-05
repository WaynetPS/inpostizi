<?php

declare(strict_types=1);

namespace izi\prestashop\Handler;

if (!defined('_PS_VERSION_')) {
    exit;
}

trait CommandHandlerTrait
{
    public static function getHandledCommandClass(): string
    {
        $class = new \ReflectionClass(static::class);
        $method = $class->getMethod('__invoke');
        $parameters = $method->getParameters();

        if ([] === $parameters || null === $commandClass = $parameters[0]->getType()) {
            throw new \LogicException(\sprintf('Cannot determine handled command class for %s.', static::class));
        }

        return $commandClass->getName();
    }
}
