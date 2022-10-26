<?php

namespace DesignPatterns\Behavioral\Command\SignIn\Command;

use DesignPatterns\Behavioral\Command\SignIn\Authentication;

final class SignIn implements Command
{
    public function __construct(
        private readonly string $username,
        private readonly string $password,
        private readonly Authentication $authentication)
    {
    }

    public function execute(): void
    {
        $this->authentication->authenticate($this->username, $this->password);
    }
}