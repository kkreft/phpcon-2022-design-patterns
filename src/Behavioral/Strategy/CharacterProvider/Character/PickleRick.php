<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider\Character;

use DesignPatterns\Behavioral\Strategy\CharacterProvider\Character;

final class PickleRick implements Character
{
    public function getId(): int
    {
        return 265;
    }
}