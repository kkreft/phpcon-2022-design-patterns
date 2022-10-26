<?php

namespace DesignPatterns\Behavioral\Command\SignIn\QueueCommand;

use JetBrains\PhpStorm\NoReturn;

final class Queue implements CommandsQueue
{
    /** @var array|Command[]  */
    private array $commands = [];

    /** @return Command[] */
    public function getAll(): array {
        return $this->commands;
    }

    #[NoReturn] public function register(Command ...$commands): void {
        foreach ($commands as $command) {
            $this->commands[] = $command;
        }
    }
}
