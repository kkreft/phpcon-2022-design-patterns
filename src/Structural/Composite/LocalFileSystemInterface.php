<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

interface LocalFileSystemInterface
{
    public function getSize(): int;
}
