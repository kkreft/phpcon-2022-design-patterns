<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

final class User implements UserInterface
{
    public function __construct(public readonly string $username)
    {
    }
}