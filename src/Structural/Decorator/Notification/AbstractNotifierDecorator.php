<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\Notification;

abstract class AbstractNotifierDecorator implements Notifier
{
    public function __construct(protected Notifier $notifier)
    {
    }

    public function send(string $message): void
    {
        $this->notifier->send($message);
    }
}