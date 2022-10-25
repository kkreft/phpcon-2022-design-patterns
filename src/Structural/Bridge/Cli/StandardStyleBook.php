<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

use League\CLImate\CLImate;

abstract class StandardStyleBook
{
    protected CLImate $climate;
    protected Color|null $color;

    public function __construct()
    {
        $this->climate = new CLImate();
    }

    abstract public function print(string $text): void;
}
