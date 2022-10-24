<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache;

use DesignPatterns\Structural\Decorator\SimpleCache\Database\DataSource;

final class Controller
{
    private ProductProvider $productProvider;
    private const USE_CACHE = true;

    public function __construct() {
        if (self::USE_CACHE === false) {
            $this->productProvider = new BaseProduct(new DataSource());
        } else {
            $productProvider = new BaseProduct(new DataSource());
            $this->productProvider = new CacheProvider($productProvider);
        }
    }

    public function getProductInfo(int $productId): void
    {
        echo json_encode($this->productProvider->getDetails($productId));
    }
}