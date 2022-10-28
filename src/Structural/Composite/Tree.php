<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

final class Tree implements FileInterface
{
    /**
     * @var FileInterface[] $elements
     */
    private array $elements = [];

    public function addElement(FileInterface $file)
    {
        $this->elements[] = $file;
    }

    public function getSize(): int
    {
        $totalSize = 0;

        foreach ($this->elements as $element) {
            $totalSize += $element->getSize();
        }

        return $totalSize;
    }
}
