<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

use League\CLImate\CLImate;

final class Controller
{
    private CLImate $climate;

    public function __construct()
    {
        $this->climate = new CLImate();
    }

    public function red(): void
    {
        $this->climate->red()->out('Roses are red');
    }

    public function blue(): void
    {
        $this->climate->blue()->out('Violets are blue');
    }

    public function sweet(): void
    {
        $this->climate->lightCyan()->out('Sugar is sweet');
    }

    public function you(): void
    {
//        $this->climate->green()->out('And so are You');
        $this->climate->green()->out('And so are PHP Design Patterns');
    }
}
