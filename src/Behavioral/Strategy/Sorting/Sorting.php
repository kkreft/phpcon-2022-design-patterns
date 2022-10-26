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

    public function sortByCreated(array $toBeSorted): array
    {
        usort($toBeSorted, function($a, $b) {
            return $a['created'] <=> $b['created'];
        });

        return $toBeSorted;
    }
}