<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

use SplObjectStorage;
use SplObserver;

final class OrderManager implements PersistOrders, \SplSubject
{
    private SplObjectStorage $observers;
    public readonly Order $order;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function persistOrder(Order $order): void
    {
        $this->order = $order;
        echo 'Order persisted' . PHP_EOL;
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}