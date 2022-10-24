<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

final class Controller
{
    private const BASEPATH = '/src/Structural/Composite/data';

    public function totalSize(): int
    {
        $config = [
            self::BASEPATH . '/measured',
            self::BASEPATH . '/pending',
        ];

        $totalSize = 0;
        $directory = new RecursiveDirectoryIterator(dirname(__FILE__) . '/data');
        foreach (new RecursiveIteratorIterator($directory) as $file) {
            if($file->isFile()) {
                $totalSize += $file->getSize();
            }
        }

        return $totalSize;
    }
}
