<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

final class Stock
{
    public int $seatsLeft = 25;

    public function decrease(): void
    {
        $this->seatsLeft--;
        echo 'Number of available seats was updated, it\'s now: ' . $this->seatsLeft . PHP_EOL;
    }
}
