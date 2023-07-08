<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Data;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

final class DocumentItem implements Arrayable, JsonSerializable
{
    public function __construct(
        private string $type,
        private ?string $status,
        private string $content,
        private string $rawContent,
        private ?DocumentItemModifiers $modifiers,
    ) {}

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getRawContent(): string
    {
        return $this->rawContent;
    }

    public function setRawContent(string $rawContent): void
    {
        $this->rawContent = $rawContent;
    }

    public function getModifiers(): ?DocumentItemModifiers
    {
        return $this->modifiers;
    }

    public function setModifiers(?DocumentItemModifiers $modifiers): void
    {
        $this->modifiers = $modifiers;
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'status' => $this->status,
            'content' => $this->content,
            'rawContent' => $this->rawContent,
            'modifiers' => $this->modifiers->toArray(),
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
