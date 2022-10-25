<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class RickAndMortyApiClient
{
    private HttpClientInterface $client;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function getCharacter(?Character $character): string
    {
        /** @var HttpClientInterface $client */

        $response = $this->client->request(
            'GET',
            'https://rickandmortyapi.com/api/character/' . $character->id()
        );

        $content = $response->getContent();

        return $content;
    }
}
