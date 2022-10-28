<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Factory
{
    public static function create(Character $character):HttpClientInterface
    {
        if (1 === $character->getId()) {
            return HttpClient::create();
        }

        return new CurlHttpClient();
    }
}