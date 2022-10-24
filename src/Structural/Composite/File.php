<?php

namespace DesignPatterns\Structural\Composite;

final class File implements LocalFileSystemInterface
{
    public function __construct(private readonly string $path) {}

    public function getSize(): int
    {
        return filesize($this->path);
    }
}