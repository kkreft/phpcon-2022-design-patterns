<?php

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

class CharacterFactory
{
    public function __invoke(int $id)
    {
        if($id === Character::RICK) {
            return new Rick();
        } else if ($id === Character::MORTY) {
            return new Morthy();
        }

        return new DefaultCharacter();
    }
}