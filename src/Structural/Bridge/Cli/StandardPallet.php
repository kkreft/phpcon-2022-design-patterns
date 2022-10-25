<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

final class StandardPallet extends StandardStyleBook
{
    public function __construct()
    {
        parent::__construct();
        $this->color = new RedColor();
    }

    public function print(string $text): void {
        $this->color->color($this->climate);
        $this->climate->out($text);
    }
}
