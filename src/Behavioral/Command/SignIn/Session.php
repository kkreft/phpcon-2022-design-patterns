<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

class Session implements SessionInterface
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
        echo "session destroyed";
        unset($this->id);
    }

    public function getUser(): UserInterface
    {
        return $this->authentication->getUser();
    }
}