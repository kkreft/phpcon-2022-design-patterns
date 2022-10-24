<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\StaticDiscount;

final class BaseProduct implements Product
{
    public function getPrice(): float
    {
        return 299.99;
    }
}