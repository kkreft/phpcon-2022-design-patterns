<?php

namespace DesignPatterns\Behavioral\Strategy\CharacterProvider\Character;

use DesignPatterns\Behavioral\Strategy\CharacterProvider\CharacterInfo;

final class Details implements CharacterInfo
{
    private function __construct(
        private string $fullName,
        private string $status,
        private string $url
    )
    {
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public static function createFromArray(array $characterData): self {
        return new self(
            $characterData['name'],
            $characterData['status'],
            $characterData['url']
        );
    }
}