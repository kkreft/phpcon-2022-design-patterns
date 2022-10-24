<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache;

use DesignPatterns\Structural\Decorator\SimpleCache\Database\DataSource;

final class Controller
{
    private ProductProvider $productProvider;
    private const USE_CACHE = false;

    public function __construct() {
        $this->productProvider = new BaseProduct(new DataSource());
    }

    public function getProductInfo(int $productId): void
    {
        if (self::USE_CACHE === false) {
            echo json_encode($this->productProvider->getDetails($productId));
        } else {
            echo json_encode($this->productProvider->getDetails($productId));
        }
    }
}