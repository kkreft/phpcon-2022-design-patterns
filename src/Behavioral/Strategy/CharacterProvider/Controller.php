<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

use Symfony\Component\HttpClient\HttpClient;

final class Controller
{
    public function getCharacter(Character $character): void
    {
        $characterProvider = new CharacterProvider(
            Factory::create($character)
        );
//        $characterInfo = $this->characterProvider->getCharacter($character);
        $characterInfo = $characterProvider->getCharacter($character);

        var_dump($characterInfo);
    }

}
