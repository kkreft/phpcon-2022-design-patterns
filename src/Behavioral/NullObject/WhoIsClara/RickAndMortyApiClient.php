<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

use DesignPatterns\Behavioral\Strategy\CharacterProvider\Character\Rick;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class RickAndMortyApiClient
{
    private HttpClientInterface $client;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function getCharacter(Character $character): string
    {
//        $character ??= Character::RICK;
        /** @var HttpClientInterface $client */

        $response = $this->client->request(
            'GET',
            'https://rickandmortyapi.com/api/character/' . $character->getId()
        );

        $content = $response->getContent();

        return $content;
    }
}
