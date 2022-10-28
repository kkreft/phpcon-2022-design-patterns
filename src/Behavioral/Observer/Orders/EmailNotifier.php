<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

use SplSubject;

final class EmailNotifier implements Notifier, \SplObserver
{
    public function notify(): void
    {
        echo 'Email Notification has been sent' . PHP_EOL;
    }

    public function update(SplSubject $subject): void
    {
        $this->notify();
    }
}
