<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

interface Character
{
    public function getId(): int;

    public function sameAs(Character $character): bool;
}