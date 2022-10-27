<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

use Symfony\Contracts\HttpClient\ResponseInterface;

final class CurlResponse implements ResponseInterface
{
    public function __construct(private readonly string $responseData)
    {
    }

    public function getStatusCode(): int
    {
        // TODO: Implement getStatusCode() method.
    }

    public function getHeaders(bool $throw = true): array
    {
        // TODO: Implement getHeaders() method.
    }

    public function getContent(bool $throw = true): string
    {
        // TODO: Implement getContent() method.
    }

    public function toArray(bool $throw = true): array
    {
        return json_decode($this->responseData, true);
    }

    public function cancel(): void
    {
        // TODO: Implement cancel() method.
    }

    public function getInfo(string $type = null): mixed
    {
        // TODO: Implement getInfo() method.
    }
}