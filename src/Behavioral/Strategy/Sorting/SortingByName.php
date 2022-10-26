<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\Sorting;

class SortingByName implements SortingInterface
{
    public function sort(array $toBeSorted): array
    {
        usort($toBeSorted, function($a, $b) {
            return $a['name'] <=> $b['name'];
        });

        return $toBeSorted;
    }
}