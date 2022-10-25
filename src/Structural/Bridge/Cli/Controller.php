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
        $pallet = new StandardPallet();
        $pallet->print('Roses are red');
    }

    public function blue(): void
    {
        $pallet = new DynamicPallet();
        $pallet->setColorImplementation(new RedColor());
        $pallet->setBackgroundColorImplementation(new BlueBackgroundColor());
        $pallet->print('Violets are blue');
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
