<?php

namespace DesignPatterns\Behavioral\Strategy\Sorting;

class SortingByCreated implements SortingInterface
{
    public function sort(array $toBeSorted): array
    {
        usort($toBeSorted, function($a, $b) {
            return $a['created'] <=> $b['created'];
        });

        return $toBeSorted;
    }
}