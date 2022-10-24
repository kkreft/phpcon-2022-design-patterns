<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\Notification;

final class EmailNotifier implements Product
{
    public function send(string $message): void
    {
        // send email logic
    }
}