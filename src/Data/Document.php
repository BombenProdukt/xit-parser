<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Data;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

final class Document implements Arrayable, JsonSerializable
{
    /**
     * @param DocumentGroup[] $groups
     */
    public function __construct(
        private string $content,
        private array $groups,
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return DocumentGroup[]
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    public function toArray(): array
    {
        return [
            'content' => $this->content,
            'groups' => $this->groups,
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
