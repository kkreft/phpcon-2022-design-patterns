<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\Sorting;

class SortingContext
{
    public function __construct(public SortingInterface $sorting)
    {
    }

    public function executeStrategy(array $toSort): array
    {
        return $this->sorting->sort($toSort);
    }
}