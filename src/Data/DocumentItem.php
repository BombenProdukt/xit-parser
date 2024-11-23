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
            'modifiers' => $this->modifiers?->toArray(),
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
