<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\Notification;

final class Controller
{
    public function sendEmail(string $message): void
    {
        $notifier = new EmailNotifier();
        $notifier->send($message);
    }

    public function sendSms(string $message): void
    {
        $notifier = new SmsNotifier();
        $notifier->send($message);
    }

    /**
     * end for both
     */
    public function send(string $message): void
    {
        $notifier = new EmailNotifier();
        $notifier = new SmsNotifierWrapper($notifier);

        $notifier->send($message);
    }
}