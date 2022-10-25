<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\HttpClient;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class Controller
{
    public function getRicky(): void
    {
        /** @var HttpClientInterface $client */
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'https://rickandmortyapi.com/api/character/15'
        );

        $statusCode = $response->getStatusCode();
        $content = $response->getContent();
//        $content = $response->toArray();

        var_dump($content);
    }
}
