<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

final class DynamicPallet extends DynamicStyleBook
{
    public function __construct()
    {
        parent::__construct();
    }

    public function print(string $text): void {
        $this->backgroundColor->backgroundColor($this->climate);
        $this->color->color($this->climate);
        $this->climate->out($text);
    }
}
