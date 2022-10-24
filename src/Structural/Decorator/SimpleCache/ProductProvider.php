<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache;

interface ProductProvider
{
    public function getDetails(int $productId): array;
}