<?php

namespace DesignPatterns\Behavioral\Strategy\Sorting;

interface SortingInterface
{
//    public function sortByName(array $toBeSorted): array;
//    public function sortByCreated(array $toBeSorted): array;
    public function sort(array $toBeSorted): array;
}