<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

interface Notifier
{
    public function notify(): void;
}