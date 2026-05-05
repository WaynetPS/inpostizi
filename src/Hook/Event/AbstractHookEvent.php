<?php

declare(strict_types=1);

namespace izi\prestashop\Hook\Event;

use izi\prestashop\Event\Event;
use Symfony\Component\HttpFoundation\Request;

if (!defined('_PS_VERSION_')) {
    exit;
}

abstract class AbstractHookEvent extends Event
{
    /**
     * @var Request|null
     */
    protected $request;

    public function __construct(?Request $request)
    {
        $this->request = $request;
    }

    public function getRequest(): ?Request
    {
        return $this->request ?? null;
    }
}
