<?php

declare(strict_types=1);

namespace izi\prestashop\HotProduct\Message;

use izi\prestashop\HotProduct\MessageHandler\DeleteHotProductHandler;

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * @see DeleteHotProductHandler
 */
final class DeleteHotProductCommand
{
    /**
     * @var int
     */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
