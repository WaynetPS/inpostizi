<?php

declare(strict_types=1);

namespace izi\prestashop\Order\Message;

use izi\prestashop\MerchantApi\Model\Order\Request\CreateOrderRequest;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface ParametersExtractorInterface
{
    /**
     * @return array<string, mixed> parameter value by name
     */
    public function extract(CreateOrderRequest $request): array;
}
