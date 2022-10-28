<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\Sorting;

use Symfony\Component\HttpClient\Retry\GenericRetryStrategy;

final class Controller
{
    private CharacterProvider $characterProvider;
    private SortingContext $sortingContext;

    public function __construct() {
        $this->characterProvider = new CharacterProvider();
        $this->sortingContext = new SortingContext();
    }
    public function sort(string $sortType): void
    {
        $characters = $this->filter($this->characterProvider->data(4));

        match ($sortType) {
            'created' => $this->sortingContext->setStrategy(new SortingByCreated()),
            'name' => $this->sortingContext->setStrategy(new SortingByName())
        };

        $this->sortingContext->executeStrategy($characters);

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
