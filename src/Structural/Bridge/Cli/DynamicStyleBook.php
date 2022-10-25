<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

use League\CLImate\CLImate;

abstract class DynamicStyleBook
{
    protected CLImate $climate;
    protected Color|null $color;
    protected BackgroundColor|null $backgroundColor;

    public function __construct()
    {
        $this->climate = new CLImate();
    }

    final public function setColorImplementation(Color $color): void {
        $this->color = $color;
    }

    final public function setBackgroundColorImplementation(BackgroundColor $backgroundColor): void {
        $this->backgroundColor = $backgroundColor;
    }

    abstract public function print(string $text): void;
}
