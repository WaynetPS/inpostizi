<?php

declare(strict_types=1);

namespace izi\prestashop\Product\Event;

use izi\prestashop\Event\Event;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class ImageEvent extends Event
{
    public const CREATED = 'inpostizi.image.created';
    public const DELETED = 'inpostizi.image.deleted';

    /**
     * @var \Image
     */
    private $image;

    public function __construct(\Image $image)
    {
        $this->image = $image;
    }

    public function getImage(): \Image
    {
        return $this->image;
    }
}
