<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\SimpleCache\Database;

final class ProductEntity {
    public function __construct(
        public readonly int $id,
        public readonly string $code,
        public readonly string $name,
        public readonly string $producer
    ) {}
}