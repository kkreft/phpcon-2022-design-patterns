<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

interface Authentication
{
    public function authenticate(string $username, string $password): bool;
    public function getUser(): UserInterface;
    public function __destruct();
}