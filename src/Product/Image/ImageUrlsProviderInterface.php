<?php

namespace izi\prestashop\Product\Image;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ImageUrlsProviderInterface
{
    public function getImageUrls(int $productId, ?int $combinationId, ?\Language $language = null, ?int $shopId = null): ImageUrls;
}
