<?php

namespace DesignPatterns\Behavioral\Command\SignIn\QueueCommand;

interface CommandsQueue
{
    /** @return Command[] */
    public function getAll(): array;
    public function register(Command ...$command): void;
}