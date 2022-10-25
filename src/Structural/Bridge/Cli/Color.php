<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

use League\CLImate\CLImate;

interface Color
{
    public function color(Climate $climate): void;
}
