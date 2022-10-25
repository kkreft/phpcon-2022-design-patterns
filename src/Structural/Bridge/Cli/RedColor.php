<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

use League\CLImate\CLImate;

final class RedColor implements Color
{
    public function color(CLImate $climate): void
    {
        $climate->red();
    }
}
