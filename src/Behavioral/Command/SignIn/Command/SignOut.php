<?php

namespace DesignPatterns\Behavioral\Command\SignIn\Command;

use DesignPatterns\Behavioral\Command\SignIn\SessionInterface;

final class SignOut implements Command
{
    public function __construct(private readonly SessionInterface $session)
    {
    }

    public function execute(): void
    {
        $this->session->destroy();
    }
}