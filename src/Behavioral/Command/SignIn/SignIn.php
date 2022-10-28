<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

final class SignIn implements Command
{
    public function __construct(
        private readonly string $username,
        private readonly string $password,
        private readonly Authentication $authentication
    )
    {
    }

    public function execute(): void
    {
        $this->authentication->authenticate($this->username, $this->password);
        var_dump($this->authentication->getUser());
        echo 'sign in';
    }

}