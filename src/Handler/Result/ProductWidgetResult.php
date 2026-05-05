<?php

declare(strict_types=1);

namespace izi\prestashop\Handler\Result;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ProductWidgetResult
{
    /**
     * @var string
     */
    private $content;

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
