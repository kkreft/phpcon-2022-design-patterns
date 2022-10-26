<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command\SignIn;

use DesignPatterns\Behavioral\Command\SignIn\Command\Invoker;
use DesignPatterns\Behavioral\Command\SignIn\Command\SignIn;
use DesignPatterns\Behavioral\Command\SignIn\Command\SignOut;

final class Controller
{
    private Authenticator $authenticator;
    private Invoker $invoker;

    public function __construct()
    {
        $this->authenticator = new Authenticator();
        $this->invoker = new Invoker();
    }

    public function signIn(string $user, string $password): void
    {
        try {
            $command = new SignIn($user, $password, $this->authenticator);
            $this->invoker->setCommand($command);
            $this->invoker->invoke();
            var_dump($this->authenticator->getUser());
        } catch (\Exception $exception) {
            print 'invalid credentials'.PHP_EOL;
            return;
        }
    }

    public function signOut(): void
    {
        $session = new Session($this->authenticator->getUser());
        var_dump($session);

        $command = new SignOut($session);
        $this->invoker->setCommand($command);
        $this->invoker->invoke();

        var_dump($session);
    }

}
