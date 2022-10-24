<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache;

use DesignPatterns\Structural\Decorator\SimpleCache\Database\DataSource;

final class Controller
{
    private ProductProvider $productProvider;

    public function __construct() {
        $this->productProvider = new BaseProduct(new DataSource());
    }

    public function getProductInfo(int $productId): void
    {
        echo json_encode($this->productProvider->getDetails($productId));
    }

    public function getProductInfoUsingCache(int $productId): void
    {
        echo json_encode($this->productProvider->getDetails($productId));
    }
}