<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

final class CurlHttpClient implements HttpClientInterface
{
    public function request(string $method, string $url, array $options = []): ResponseInterface
    {
        echo 'CURL CLIENT processing...' . PHP_EOL;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        curl_close($ch);

        return new CurlResponse($output);
    }

    public function stream(iterable|ResponseInterface $responses, float $timeout = null): ResponseStreamInterface
    {
        throw new \Exception('Stream is not supported');
    }

    public function withOptions(array $options): static
    {
        throw new \Exception('WithOptions function is not supported');
    }
}