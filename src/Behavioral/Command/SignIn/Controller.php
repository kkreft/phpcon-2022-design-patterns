<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command\SignIn;

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
            $signIn = new SignIn($user, $password, $this->authenticator);
            $this->invoker->addCommand($signIn);
            $this->invoker->invoke();
        } catch (\Exception $exception) {
            print 'invalid credentials'.PHP_EOL;
            return;
        }
    }

    public function signOut(): void
    {
        $session = new Session($this->authenticator);

        $signout = new SignOut($session);
        $this->invoker->addCommand($signout);
        $this->invoker->invoke();
    }

    public function loginAndLogut(string $username, string $password): void
    {
        $loginCommand = new SignIn($username, $password, $this->authenticator);
        $this->invoker->addCommand($loginCommand);

        $session = new Session($this->authenticator);
        $logoutCommand = new SignOut($session);
        $this->invoker->addCommand($logoutCommand);
        $this->invoker->invoke();
    }
}
