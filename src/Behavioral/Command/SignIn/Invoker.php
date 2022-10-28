<?php

namespace DesignPatterns\Behavioral\Command\SignIn;

final class Invoker
{
    /**
     * @var Command[]
     */
    private array $command = [];

    public function addCommand(Command $command): void
    {
        $this->command[] = $command;
    }
    public function invoke(): void
    {
        foreach ($this->command as $command) {
            $command->execute();
        }
    }

}