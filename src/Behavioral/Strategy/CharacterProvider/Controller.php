<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

use Symfony\Component\HttpClient\HttpClient;

final class Controller
{
    public function getCharacter(Character $character): void
    {
//        $characterProvider = new CharacterProvider(HttpClient::create());
//        $characterInfo = $characterProvider->getCharacter($character);

        $characterProvider = new CharacterProvider(new CurlHttpClient());
        $characterInfo = $characterProvider->getCharacter($character);

        var_dump($characterInfo);
    }
}
