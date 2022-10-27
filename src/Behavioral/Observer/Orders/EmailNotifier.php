<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

final class EmailNotifier implements Notifier
{
    public function notify(): void
    {
        echo 'Email Notification has been sent' . PHP_EOL;
    }
}
