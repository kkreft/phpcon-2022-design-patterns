<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

interface SessionInterface
{
    public function getId(): string;
    public function getUser(): UserInterface;
    public function destroy(): void;
}