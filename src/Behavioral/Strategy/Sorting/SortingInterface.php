<?php

namespace DesignPatterns\Behavioral\Strategy\Sorting;

interface SortingInterface
{
    public function sort(array $toBeSorted): array;
}