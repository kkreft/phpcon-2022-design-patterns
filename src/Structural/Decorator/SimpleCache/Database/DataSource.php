<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache\Database;

final class DataSource {
    public function getProductDetails(int $productId): ProductEntity
    {
        // eg. fetch it from DB
        return new ProductEntity(
            id: 12,
            code: '7d858d7c-c326-4274-8779-6e8f290eb854',
            name: '',
            producer: 'John Doe'
        );
    }

}