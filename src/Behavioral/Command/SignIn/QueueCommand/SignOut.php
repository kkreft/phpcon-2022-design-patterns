<?php

namespace DesignPatterns\Behavioral\Command\SignIn\QueueCommand;

use DesignPatterns\Behavioral\Command\SignIn\SessionInterface;

final class SignOut implements Command
{
    public function __construct(private readonly SessionInterface $session)
    {
    }

    public function execute(): void
    {
        echo 'Executing SignOut, destroying session...' . PHP_EOL;
        $this->session->destroy();
    }
}