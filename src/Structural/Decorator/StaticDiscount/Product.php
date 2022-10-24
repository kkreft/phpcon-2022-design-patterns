<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\StaticDiscount;

interface Product
{
    public function getPrice(): float;
}