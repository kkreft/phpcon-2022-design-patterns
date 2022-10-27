<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

interface PersistOrders
{
    public function persistOrder(Order $order): void;
}