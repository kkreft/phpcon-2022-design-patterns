<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\Cli;

use League\CLImate\CLImate;

final class BlueBackgroundColor implements BackgroundColor
{
    public function backgroundColor(CLImate $climate): void
    {
        $climate->backgroundBlue();
    }
}
