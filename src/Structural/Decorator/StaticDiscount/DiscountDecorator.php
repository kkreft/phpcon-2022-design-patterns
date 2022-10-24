<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\StaticDiscount;

class DiscountDecorator implements Product
{
    private const DISCOUNT = 0.95;

    public function __construct(protected Product $product) {}

    public function getPrice(): float
    {
        return $this->product->getPrice() * self::DISCOUNT;
    }
}