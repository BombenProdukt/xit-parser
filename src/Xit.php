<?php

declare(strict_types=1);

namespace BombenProdukt\XitParser;

final readonly class Xit
{
    public static function parse(string $document): Document
    {
        return (new DocumentParser(new ModifierParser()))->parse($document);
    }

    public static function render(Document $document): string
    {
        return (new DocumentRenderer())->render($document);
    }
}
