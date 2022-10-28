<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

final class Controller
{

    public function totalSize(): int
    {
        $config = [
            dirname(__FILE__) . '/data/measured',
            dirname(__FILE__) . '/data/inprogress',
            dirname(__FILE__) . '/data/pending',
        ];

        $tree = new Tree();

        foreach ($config as $item) {
            $tree->addElement(new File($item));
        }

        //return $tree->getSize();
        var_dump(
            (new File( dirname(__FILE__) . '/data/pending'))->getSize());
    }
}
