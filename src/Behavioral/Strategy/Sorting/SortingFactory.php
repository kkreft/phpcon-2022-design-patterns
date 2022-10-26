<?php

namespace DesignPatterns\Behavioral\Strategy\Sorting;

final class SortingFactory
{
    public static function forNameSorting(): SortingInterface {
        return new SortingByName();
    }

    public static function forCreateSorting(): SortingInterface {
        return new SortingByCreated();
    }
}