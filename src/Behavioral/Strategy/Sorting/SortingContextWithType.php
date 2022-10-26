<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\Sorting;

class SortingContextWithType
{
    public function executeStrategy(array $toSort, string $sortType): array
    {
        if ($sortType === 'name') {
            $sorting = SortingFactory::forNameSorting();

            return $sorting->sort($toSort);
        }

        if ($sortType === 'created') {
            $sorting = SortingFactory::forCreateSorting();

            return $sorting->sort($toSort);
        }
    }
}