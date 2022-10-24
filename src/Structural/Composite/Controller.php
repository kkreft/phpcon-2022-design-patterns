<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

final class Controller
{
    private const BASEPATH = '/src/Structural/Composite/data';

    public function totalSize(): int
    {
        $config = [
            self::BASEPATH . '/measured',
            self::BASEPATH . '/pending',
        ];

        $directory = new Directory();
        foreach ($config as $path) {
            $directory->addElement(new File($path));
        }

        return $directory->getSize();
    }
}
