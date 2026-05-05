<?php

declare(strict_types=1);

namespace izi\prestashop\Http\Exception;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface HttpExceptionInterface
{
    public function getRequest(): RequestInterface;

    public function getResponse(): ResponseInterface;
}
