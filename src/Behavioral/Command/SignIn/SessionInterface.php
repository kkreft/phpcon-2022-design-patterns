<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

interface SessionInterface
{
    public function getId():string;

    public function destroy(): void;

    public function getUser(): UserInterface;
}