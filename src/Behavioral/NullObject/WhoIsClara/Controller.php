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

    public function getRick(): void
    {
        var_dump($this->apiClient->getCharacter(Character::RICK));
    }

    public function getMorty(): void
    {
        var_dump($this->apiClient->getCharacter(Character::MORTY));
    }

    public function getClara(): void
    {
        var_dump($this->apiClient->getCharacter(null));
    }
}
