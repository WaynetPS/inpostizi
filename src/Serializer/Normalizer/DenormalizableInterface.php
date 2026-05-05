<?php

declare(strict_types=1);

namespace izi\prestashop\Serializer\Normalizer;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface DenormalizableInterface
{
    /**
     * @return static
     */
    public static function denormalize(array $data);
}
