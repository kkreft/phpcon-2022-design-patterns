<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\StaticDiscount;

final class Controller
{
    public function getBasePrice(): float
    {
        $product = new BaseProduct();

        return $product->getPrice();
    }

    public function getNoChargePrice(): float
    {
        $product = new NoChargeProduct();

        return $product->getPrice();
    }

    public function getDefaultDiscount(): float
    {
        $product = new BaseProduct();
        $product = new DiscountDecorator($product);

        return $product->getPrice();
    }
}