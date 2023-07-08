<?php

declare(strict_types=1);

namespace Tests\Unit\Parser;

use BombenProdukt\Xit\Parser\DocumentParser;
use function Spatie\Snapshots\assertMatchesSnapshot;

it('should parse the document', function (): void {
    $parser = new DocumentParser();
    $parsed = $parser->parse(xit());

    assertMatchesSnapshot($parsed);
});
