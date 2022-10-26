<?php

namespace DesignPatterns\Behavioral\Command\SignIn\QueueCommand;

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
        echo 'Executing SignIn..' . PHP_EOL;
        $this->authentication->authenticate($this->username, $this->password);
    }
}