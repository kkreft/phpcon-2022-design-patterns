<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

final class Authenticator implements Authentication
{
    private ?UserInterface $user = null;

    public function authenticate(string $username, string $password): bool
    {
        if ($username == 'Bob') {
            $this->user = new User($username);
            return true;
        }

        throw new \Exception('User unknown');
    }

    public function getUser(): UserInterface
    {
        if (is_null($this->user)) {
            throw new \Exception('User unknown');
        }
        return $this->user;
    }
}