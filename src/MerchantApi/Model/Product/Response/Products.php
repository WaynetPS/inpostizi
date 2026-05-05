<?php

declare(strict_types=1);

namespace izi\prestashop\MerchantApi\Model\Product\Response;

use izi\prestashop\Common\HotProduct\IdentifiableProduct;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class Products implements \JsonSerializable
{
    /**
     * @var IdentifiableProduct[]
     */
    private $content;

    /**
     * @var int|null
     */
    private $total_items;

    /**
     * @var int|null
     */
    private $page_index;

    /**
     * @var int|null
     */
    private $page_size;

    /**
     * @param IdentifiableProduct[] $content
     */
    public function __construct(array $content, ?int $total_items = null, ?int $page_index = null, ?int $page_size = null)
    {
        $this->content = $content;
        $this->total_items = $total_items;
        $this->page_index = $page_index;
        $this->page_size = $page_size;
    }

    /**
     * @return IdentifiableProduct[]
     */
    public function getItems(): array
    {
        return $this->content;
    }

    public function getTotalCount(): ?int
    {
        return $this->total_items;
    }

    public function getPageIndex(): ?int
    {
        return $this->page_index;
    }

    public function getPageSize(): ?int
    {
        return $this->page_size;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
