<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

use League\CLImate\CLImate;

final class BlueColor implements Color
{
    public function color(CLImate $climate): void
    {
        $climate->blue();
    }
}
