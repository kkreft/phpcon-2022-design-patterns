<?php

namespace DesignPatterns\Behavioral\Command\SignIn\QueueCommand;

final class Invoker
{
    public function __invoke(Command ...$commands): void
    {
        foreach ($commands as $command) {
            $command->execute();
        }
    }
}