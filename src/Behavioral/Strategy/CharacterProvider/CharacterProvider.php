<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

use DesignPatterns\Behavioral\Strategy\CharacterProvider\Character\Details;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class CharacterProvider implements CharacterAPI
{
    public function __construct(private HttpClientInterface $httpClient)
    {
    }

    public function getCharacter(Character $character): CharacterInfo
    {
        $response = $this->httpClient->request(
            'GET',
            'https://rickandmortyapi.com/api/character/' . $character->getId()
        );

        return Details::createFromArray($response->toArray());
    }

    public function getCharacterByCurl(Character $character): CharacterInfo
    {
        $ch = curl_init("https://rickandmortyapi.com/api/character/{$character->getId()}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        curl_close($ch);

        return Details::createFromArray(json_decode($output, true));
    }
}
