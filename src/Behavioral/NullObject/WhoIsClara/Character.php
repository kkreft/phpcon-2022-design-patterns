<?php

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

enum Character {
    case RICK;
    case MORTY;

    public function id(): string
    {
        return match($this)
        {
            Character::RICK => 1,
            Character::MORTY => 2,
        };
    }
}