<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

interface LocalFileSystemInterface
{
    public function getSize(): int;
}
