<?php

declare(strict_types=1);

namespace izi\prestashop\Event;

use Symfony\Component\EventDispatcher\Event as LegacyEvent;
use Symfony\Contracts\EventDispatcher\Event as BaseEvent;

if (!defined('_PS_VERSION_')) {
    exit;
}

if (class_exists(LegacyEvent::class)) {
    class Event extends LegacyEvent
    {
    }
} else {
    class Event extends BaseEvent
    {
    }
}
