<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

final class Directory implements LocalFileSystemInterface
{
    /** @var array|LocalFileSystemInterface[] */
    private array $elements;

    public function getSize(): int
    {
        $totalSize = 0;

        foreach ($this->elements as $element) {
            $totalSize += $element->getSize();
        }

        return $totalSize;
    }

    public function addElement(LocalFileSystemInterface $file)
    {
        $this->elements[] = $file;
    }
}
