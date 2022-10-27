<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

interface CharacterAPI
{
    public function getCharacter(Character $character): CharacterInfo;
}