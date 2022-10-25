<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

use League\CLImate\CLImate;

interface BackgroundColor
{
    public function backgroundColor(CLImate $climate): void;
}
