<?php

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

class Rick implements Character
{
    public function getId(): int
    {
        return Character::RICK;
    }
}