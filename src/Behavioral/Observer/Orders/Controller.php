<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

final class Controller
{
    private OrderManager $orderManager;

    public function __construct()
    {
        $this->orderManager = new OrderManager();
        $this->orderManager->attach(new EmailNotifier());
        $this->orderManager->attach(new Stock());
    }

    public function saveOrder(array $orderData): void
    {
        $order = new Workshop($orderData);
        $this->orderManager->persistOrder($order);
    }
}
