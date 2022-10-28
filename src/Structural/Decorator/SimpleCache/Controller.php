<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache;

use DesignPatterns\Structural\Decorator\SimpleCache\Database\DataSource;

final class Controller
{
    private ProductProvider $productProvider;
    private const USE_CACHE = false;

    public function __construct() {
    }

    public function getProductInfo(int $productId): void
    {
        $productProvider = new BaseProduct(new DataSource());

        if (self::USE_CACHE === true) {
           $productProvider = new CacheProductProvider($productProvider);
        }

        echo json_encode($productProvider->getDetails($productId));
    }
}