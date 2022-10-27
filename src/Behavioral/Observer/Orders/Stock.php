<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

use SplSubject;

final class Stock implements \SplObserver
{
    public int $seatsLeft = 25;

    public function decrease(): void
    {
        $this->seatsLeft--;
        echo 'Number of available seats was updated, it\'s now: ' . $this->seatsLeft . PHP_EOL;
    }

    public function update(SplSubject $subject): void
    {
        $this->decrease();
    }
}
