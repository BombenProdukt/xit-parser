<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Data;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

final class DocumentItemModifiers implements Arrayable, JsonSerializable
{
    public function __construct(
        private bool $hasPriority = false,
        private int $priorityLevel = 0,
        private int $priorityPadding = 0,
        private ?string $due = null,
        private array $tags = [],
    ) {}

    public function getHasPriority(): bool
    {
        return $this->hasPriority;
    }

    public function setHasPriority(bool $hasPriority): void
    {
        $this->hasPriority = $hasPriority;
    }

    public function getPriorityLevel(): int
    {
        return $this->priorityLevel;
    }

    public function setPriorityLevel(int $priorityLevel): void
    {
        $this->priorityLevel = $priorityLevel;
    }

    public function getPriorityPadding(): int
    {
        return $this->priorityPadding;
    }

    public function setPriorityPadding(int $priorityPadding): void
    {
        $this->priorityPadding = $priorityPadding;
    }

    public function getDue(): ?string
    {
        return $this->due;
    }

    public function setDue(?string $due): void
    {
        $this->due = $due;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    public function toArray(): array
    {
        return [
            'hasPriority' => $this->hasPriority,
            'priorityLevel' => $this->priorityLevel,
            'priorityPadding' => $this->priorityPadding,
            'due' => $this->due,
            'tags' => $this->tags,
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
