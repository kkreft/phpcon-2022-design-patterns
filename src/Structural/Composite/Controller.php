<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

final class Controller
{
    public function totalSize(): int
    {
        $config = [
//            dirname(__FILE__) . '/data/inprogress',
            dirname(__FILE__) . '/data/pending',
            dirname(__FILE__) . '/data/measured',
        ];

        $directory = new Directory();
        foreach ($config as $path) {
            $directory->addElement(new File($path));
        }

        return $directory->getSize();
    }
}
