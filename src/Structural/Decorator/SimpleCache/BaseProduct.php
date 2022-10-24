<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache;

use DesignPatterns\Structural\Decorator\SimpleCache\Database\DataSource;

final class BaseProduct implements ProductProvider
{
    public function __construct(private readonly DataSource $dataSource) {}

    public function getDetails(int $productId): array
    {
        $product = $this->dataSource->getProductDetails($productId);

        return [
            'name' => $product->name,
            'producer' => $product->producer
        ];
    }
}