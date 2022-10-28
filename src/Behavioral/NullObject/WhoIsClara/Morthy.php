<?php

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

class Morthy implements Character
{

    public function getId(): int
    {
        return Character::MORTY;
    }
}