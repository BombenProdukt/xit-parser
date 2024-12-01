<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Data;

use Illuminate\Contracts\Support\Arrayable;

final class DocumentGroup implements \JsonSerializable, Arrayable
{
    /**
     * @param array<DocumentItem> $items
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
     * @return array<DocumentItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function addItem(DocumentItem $documentItem): void
    {
        $this->items[] = $documentItem;
    }

    #[\Override()]
    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'items' => $this->items,
        ];
    }

    #[\Override()]
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
