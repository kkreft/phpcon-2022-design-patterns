<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider;

interface CharacterInfo
{
    public function getFullName(): string;
    public function getStatus(): string;
    public function getUrl(): string;
}