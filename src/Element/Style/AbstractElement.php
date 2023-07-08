<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Style;

use Stringable;

abstract class AbstractElement implements Stringable
{
    public function __construct(private readonly string $text)
    {
        //
    }

    public function __toString(): string
    {
        return \sprintf(
            '<span style="%s">%s</span>',
            $this->getStyle(),
            $this->getText(),
        );
    }

    public static function fromString(string $text): static
    {
        return new static($text);
    }

    protected function getText(): string
    {
        return $this->text;
    }

    abstract protected function getStyle(): string;
}
