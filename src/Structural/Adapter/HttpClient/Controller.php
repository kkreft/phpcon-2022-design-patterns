<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\HttpClient;

use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Component\HttpClient\Psr18Client;

final class Controller
{
    public function getRicky(): void
    {
        $client = new Psr18Client(null, new Psr17Factory());
        $request = $client->createRequest('GET', 'https://rickandmortyapi.com/api/character/15');
        $response = $client->sendRequest($request);

        var_dump($response->getBody()->getContents());
    }
}
