<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

final class OrderManager implements PersistOrders
{
    public function persistOrder(Order $order): void
    {
        echo 'Order persisted' . PHP_EOL;
    }
}