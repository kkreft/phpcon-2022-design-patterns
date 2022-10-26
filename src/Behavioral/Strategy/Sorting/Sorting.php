<?php

namespace DesignPatterns\Behavioral\Strategy\Sorting;

class Sorting implements SortingInterface
{
    public function sortByName(array $toBeSorted): array
    {
        usort($toBeSorted, function($a, $b) {
            return $a['name'] <=> $b['name'];
        });

        return $toBeSorted;
    }

    public function sortById(array $toBeSorted): array
    {
        usort($toBeSorted, function($a, $b) {
            return $a['id'] <=> $b['id'];
        });

        return $toBeSorted;
    }
}