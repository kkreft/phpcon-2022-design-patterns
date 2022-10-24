<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache;

final class CacheProvider implements ProductProvider
{
    private array $cachedResults = [];

    public function __construct(protected ProductProvider $productProvider) {}

    public function getDetails(int $productId): array
    {
        if (in_array($productId, $this->cachedResults)) {
            return $this->cachedResults[$productId];
        }

        return $this->productProvider->getDetails($productId);
    }
}