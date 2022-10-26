<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

final class NullUser implements UserInterface
{
    public function getUsername(): string
    {
        throw new \Exception('User not found (NullUser)');
    }
}