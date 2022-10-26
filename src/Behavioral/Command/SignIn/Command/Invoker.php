<?php

namespace DesignPatterns\Behavioral\Command\SignIn\Command;

final class Invoker
{
    private Command $command;

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    public function invoke(): void
    {
        $this->command->execute();
    }
}