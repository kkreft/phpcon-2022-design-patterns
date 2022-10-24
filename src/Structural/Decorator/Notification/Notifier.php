<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator\Notification;

interface Notifier
{
    public function send(string $message): void;
}