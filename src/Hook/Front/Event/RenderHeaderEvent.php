<?php

declare(strict_types=1);

namespace izi\prestashop\Hook\Front\Event;

use izi\prestashop\Hook\Event\AbstractRenderEvent;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class RenderHeaderEvent extends AbstractRenderEvent
{
}
