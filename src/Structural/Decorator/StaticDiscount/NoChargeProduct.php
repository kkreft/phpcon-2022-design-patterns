<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\StaticDiscount;

final class NoChargeProduct implements Product
{
    public function getPrice(): float
    {
        return 0.0;
    }
}