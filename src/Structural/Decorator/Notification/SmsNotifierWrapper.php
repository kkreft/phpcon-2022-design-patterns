<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\Notification;

final class SmsNotifierWrapper extends AbstractNotifierDecorator
{
    public function send(string $message): void
    {
        parent::send($message);
        // now send sms logic
    }
}