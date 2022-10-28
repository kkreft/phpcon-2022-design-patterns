<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

use DesignPatterns\Behavioral\Strategy\CharacterProvider\Character\Details;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

class CurlHttpClient implements HttpClientInterface
{

    public function request(string $method, string $url, array $options = []): ResponseInterface
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        curl_close($ch);
        echo PHP_EOL . 'CURL' . PHP_EOL;
        return new CurlResponse($output);

    }

    public function stream(iterable|ResponseInterface $responses, float $timeout = null): ResponseStreamInterface
    {
        // TODO: Implement stream() method.
    }

    public function withOptions(array $options): static
    {
        // TODO: Implement withOptions() method.
    }
}