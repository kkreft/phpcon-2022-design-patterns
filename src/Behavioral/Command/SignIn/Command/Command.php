<?php

namespace DesignPatterns\Behavioral\Command\SignIn\Command;

interface Command
{
    public function execute(): void;
}