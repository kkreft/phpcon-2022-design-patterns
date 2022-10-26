<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\Sorting;

final class Controller
{
    private CharacterProvider $characterProvider;
    private SortingContextWithType $sortingContextWithType;

    public function __construct() {
        $this->characterProvider = new CharacterProvider();
        $this->sortingContextWithType = new SortingContextWithType();
    }
    public function sort(string $sortType): void
    {
        $characters = $this->filter($this->characterProvider->data(4));

        /**
         * 1. SortingContextWithName
         */
        $characters = $this->sortingContextWithType->executeStrategy($characters, $sortType);

        /**
         * 2. SortingContext Without
         *
        $sortingContext = new SortingContext(SortingFactory::forNameSorting());

        if ($sortType === 'created') {
            $sortingContext = new SortingContext(SortingFactory::forCreateSorting());
        }

        $characters = $sortingContext->executeStrategy($characters);
        /**/

        var_dump($characters);
    }

    private function filter(array $characters): array
    {
        return array_map(
            function($character) {
                return [
                    'id' => $character['id'],
                    'name' => $character['name'],
                    'created' => $character['created']
                ]; },
            $characters
        );
    }
}
