<?php

namespace DesignPatterns\Behavioral\Command\SignIn\QueueCommand;

interface Command
{
    public function execute(): void;
}