<?php

namespace DesignPatterns\Behavioral\Strategy\Sorting;

class SortingContext
{
    private SortingInterface $sortingStrategy;

    public function setStrategy(SortingInterface $sorting): void
    {
        $this->sortingStrategy = $sorting;
    }

    public function executeStrategy(array $toSort): array
    {
        return $this->sortingStrategy->sort($toSort);
    }
}