<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command\SignIn;

final class Controller
{
    private Authenticator $authenticator;

    public function __construct()
    {
        $this->authenticator = new Authenticator();
    }

    public function signIn(string $user, string $password): void
    {
        try {
            $this->authenticator->authenticate($user, $password);
            var_dump($this->authenticator->getUser());
        } catch (\Exception $exception) {
            print 'invalid credentials'.PHP_EOL;
            return;
        }
    }
}
