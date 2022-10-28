<?php

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

class DefaultCharacter implements Character
{
    public function getId(): int
    {
        return Character::DEFAULT;
    }
}