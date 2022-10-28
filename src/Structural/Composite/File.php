<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

final class File implements FileInterface
{
    public function __construct(private string $path) {}

    public function getSize(): int
    {
        $totalSize = 0;
        $directory = new RecursiveDirectoryIterator($this->path);
        foreach (new RecursiveIteratorIterator($directory) as $file) {
            if($file->isFile()) {
                $totalSize += $file->getSize();
            }
        }

        return $totalSize;
    }
}
