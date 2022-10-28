<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider\Character;

use DesignPatterns\Behavioral\Strategy\CharacterProvider\Character;

final class Rick implements Character
{
    public function getId(): int
    {
        return 1;
    }

    public function sameAs(Character $character): bool
    {
        return $this->getId() === $character->getId();
    }
}