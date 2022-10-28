<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\Notification;

final class Controller
{
    public function send(string $message): void
    {
        $notifier = new EmailNotifier();

        $wrapper = new SmsNotifierWrapper($notifier);
        $wrapper->send($message);
    }
}