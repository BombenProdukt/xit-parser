<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Data;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

final class DocumentGroup implements Arrayable, JsonSerializable
{
    /**
     * @param DocumentItem[] $items
     */
    public function __construct(
        private ?string $title = null,
        private array $items = [],
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return DocumentItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function addItem(DocumentItem $item): void
    {
        $this->items[] = $item;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'items' => $this->items,
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
