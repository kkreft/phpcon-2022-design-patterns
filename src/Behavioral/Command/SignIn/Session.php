<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

final class Session implements SessionInterface
{
    private string $id;

    public function __construct(private UserInterface $user)
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
        $this->user = new NullUser();
    }

    public function getUser(): UserInterface
    {
        return $this->user;
    }
}