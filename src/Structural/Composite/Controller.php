<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

final class Controller
{
    public function totalSize(): int
    {
        $totalSize = 0;
        $directory = new RecursiveDirectoryIterator('/src/Structural/Composite/data');
        foreach (new RecursiveIteratorIterator($directory) as $file) {
            if($file->isFile()) {
                $totalSize += $file->getSize();
            }
        }

        return $totalSize;
    }
}
