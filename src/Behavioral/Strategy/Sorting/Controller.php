<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\Sorting;

final class Controller
{
    private CharacterProvider $characterProvider;
    private Sorting $sorting;

    public function __construct() {
        $this->characterProvider = new CharacterProvider();
        $this->sorting = new Sorting();
    }
    public function sort(string $sortType): void
    {
        $characters = $this->filter($this->characterProvider->data(4));

        if ('name' === $sortType) {
            $characters = $this->sorting->sortByName($characters);
        }

        if ('id' === $sortType) {
            $characters = $this->sorting->sortByCreated($characters);
        }

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
