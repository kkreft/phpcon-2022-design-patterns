<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

final class SignOut implements Command
{
    public function __construct(private readonly SessionInterface $session)
    {
    }

    public function execute(): void
    {
        echo 'sign out';
        $this->session->destroy();
        // TODO: Implement execute() method.
    }

}