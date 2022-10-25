<?php

namespace DesignPatterns\Structural\Composite;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

final class File implements LocalFileSystemInterface
{
    public function __construct(private readonly string $path) {}

    public function getSize(): int
    {
        $directory = new RecursiveDirectoryIterator($this->path);
        $totalSize = 0;
        foreach (new RecursiveIteratorIterator($directory) as $file) {
            if($file->isFile()) {
                $totalSize += $file->getSize();
            }
        }

        return $totalSize;
    }
}