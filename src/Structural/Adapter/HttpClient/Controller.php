<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\HttpClient;

use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class Controller
{
    public function getRicky(): void
    {
        $client = new Psr18Client(responseFactory: new Psr17Factory());
//        $response = $client->request(
//            'GET',
//            'https://rickandmortyapi.com/api/character/15'
//        );
        $request = $client->createRequest(
            'GET',
            'https://rickandmortyapi.com/api/character/15'
        );
        $response = $client->sendRequest($request);

//        $content = $response->toArray();

        var_dump($response->getBody()->getContents());
    }
}
