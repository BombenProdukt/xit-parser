<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Data;

use BaseCodeOy\Xit\Enum\ItemStatus;
use BaseCodeOy\Xit\Enum\ItemType;
use Illuminate\Contracts\Support\Arrayable;

final class DocumentItem implements \JsonSerializable, Arrayable
{
    public function __construct(
        private ItemType $itemType,
        private ?ItemStatus $itemStatus = null,
        private ?string $content = null,
        private ?string $rawContent = null,
        private ?DocumentItemModifiers $documentItemModifiers = null,
    ) {}

    public function getType(): ItemType
    {
        return $this->itemType;
    }

    public function setType(ItemType $itemType): void
    {
        $this->itemType = $itemType;
    }

    public function getStatus(): ?ItemStatus
    {
        return $this->itemStatus;
    }

    public function setStatus(?ItemStatus $itemStatus): void
    {
        $this->itemStatus = $itemStatus;
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
        return $this->documentItemModifiers;
    }

    public function setModifiers(?DocumentItemModifiers $documentItemModifiers): void
    {
        $this->documentItemModifiers = $documentItemModifiers;
    }

    #[\Override()]
    public function toArray(): array
    {
        return [
            'type' => $this->itemType,
            'status' => $this->itemStatus,
            'content' => $this->content,
            'rawContent' => $this->rawContent,
            'modifiers' => $this->documentItemModifiers?->toArray(),
        ];
    }

    #[\Override()]
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
