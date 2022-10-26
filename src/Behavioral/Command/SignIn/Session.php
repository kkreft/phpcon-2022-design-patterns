<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

final class Session implements SessionInterface
{
    private string $id;

    public function __construct(private Authentication $authentication)
    {
        $this->id = uniqid();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function destroy(): void
    {
        unset($this->id);
        $this->authentication->__destruct();
    }

    public function getUser(): UserInterface
    {
        return $this->authentication->getUser();
    }
}