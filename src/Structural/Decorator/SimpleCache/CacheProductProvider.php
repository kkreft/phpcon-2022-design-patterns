<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache;

use DesignPatterns\Structural\Decorator\SimpleCache\Database\DataSource;

final class CacheProductProvider implements ProductProvider
{
    private $cacheResults = [];
    public function __construct(protected readonly ProductProvider $provider) {}

    public function getDetails(int $productId): array
    {
        if (in_array($productId,array_keys( $this->cacheResults))){
            return $this->cacheResults[$productId];
        }

        return $this->cacheResults[$productId]
            = $this->provider->getDetails($productId);

    }
}