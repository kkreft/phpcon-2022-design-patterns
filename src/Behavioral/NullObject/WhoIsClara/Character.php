<?php

namespace DesignPatterns\Behavioral\NullObject\WhoIsClara;

interface Character {
    public const DEFAULT = 1;
    public const RICK = 1;
    public const MORTY = 2;

    public function getId(): int;
}