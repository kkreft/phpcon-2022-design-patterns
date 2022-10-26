<?php

namespace DesignPatterns\Behavioral\Strategy\Sorting;

interface SortingInterface
{
    public function sortByName(array $toBeSorted): array;
    public function sortById(array $toBeSorted): array;
}