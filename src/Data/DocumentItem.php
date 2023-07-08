<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Data;

use BombenProdukt\Xit\Enum\ItemStatus;
use BombenProdukt\Xit\Enum\ItemType;
use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

final class DocumentItem implements Arrayable, JsonSerializable
{
    public function __construct(
        private ItemType $type,
        private ?ItemStatus $status = null,
        private ?string $content = null,
        private ?string $rawContent = null,
        private ?DocumentItemModifiers $modifiers = null,
    ) {}

    public function getType(): ItemType
    {
        return $this->type;
    }

    public function setType(ItemType $type): void
    {
        $this->type = $type;
    }

    public function getStatus(): ?ItemStatus
    {
        return $this->status;
    }

    public function setStatus(?ItemStatus $status): void
    {
        $this->status = $status;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function getRawContent(): ?string
    {
        return $this->rawContent;
    }

    public function setRawContent(?string $rawContent): void
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
