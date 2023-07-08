<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

use BombenProdukt\Xit\Data\Document;

final readonly class Xit
{
    public static function parse(string $content): Document
    {
        return (new DocumentParser(new ModifierParser()))->parse($content);
    }

    public static function render(Document $document): string
    {
        return (new DocumentRenderer())->render($document);
    }
}
