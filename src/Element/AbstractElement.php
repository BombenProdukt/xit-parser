<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Element;

abstract class AbstractElement implements \Stringable, ElementInterface
{
    public function __construct(
        private readonly string $text,
    ) {
        //
    }

    public function __toString(): string
    {
        return \sprintf($this->getHtml(), $this->getText());
    }

    public static function fromString(string $text): static
    {
        return new static($text);
    }

    protected function getText(): string
    {
        return $this->text;
    }

    abstract protected function getHtml(): string;
}
