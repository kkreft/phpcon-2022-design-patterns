<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\Sorting;

use Symfony\Component\HttpClient\HttpClient;

final class CharacterProvider
{
    private const CACHE_FILENAME = 'characters.json';

    public function data(int $limit = 0): array
    {
        if (file_exists(self::CACHE_FILENAME)) {
            $characters = json_decode(file_get_contents(self::CACHE_FILENAME), true);
            return $limit > 0 ? array_slice($characters, 0, $limit) : $characters;
        }

        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'https://rickandmortyapi.com/api/character'
        );

        file_put_contents(
            self::CACHE_FILENAME,
            json_encode($response->toArray()['results'])
        );

        $characters = $response->toArray()['results'];
        return $limit > 0 ? array_slice($characters, 0, $limit) : $characters;

    }
}
