<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

final class Controller
{
    private OrderManager $orderManager;
    private Stock $stock;
    private EmailNotifier $emailNotifier;

    public function __construct()
    {
        $this->orderManager = new OrderManager();

        $this->orderManager->attach(new Stock());
        $this->orderManager->attach(new EmailNotifier());
    }

    public function saveOrder(array $orderData): void
    {
        $order = new Workshop($orderData);
        $this->orderManager->persistOrder($order);
    }
}
