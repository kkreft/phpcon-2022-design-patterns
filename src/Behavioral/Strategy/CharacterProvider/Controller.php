<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

use Symfony\Component\HttpClient\HttpClient;

final class Controller
{
    private CharacterProvider $characterProvider;

    public function __construct() {
        $this->characterProvider = new CharacterProvider(HttpClient::create());
    }
    public function getCharacter(Character $character): void
    {
//        $characterInfo = $this->characterProvider->getCharacter($character);
        $characterInfo = $this->characterProvider->getCharacterByCurl($character);

        var_dump($characterInfo);
    }

    private function filter(array $characters): array
    {
        return array_map(
            function($character) {
                return [
                    'id' => $character['id'],
                    'name' => $character['name'],
                    'created' => $character['created']
                ]; },
            $characters
        );
    }
}
