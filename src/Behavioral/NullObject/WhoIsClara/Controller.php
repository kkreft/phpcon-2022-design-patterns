<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

final class Controller
{
    private RickAndMortyApiClient $rickAndMortyApiClient;

    public function __construct()
    {
        $this->apiClient = new RickAndMortyApiClient();
    }

    public function getCharacter(int $characterId): void
    {
        $character = (new CharacterFactory())($characterId);

        var_dump($this->apiClient->getCharacter($character)); //Fajne :)
    }
}
