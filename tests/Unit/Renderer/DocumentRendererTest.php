<?php

declare(strict_types=1);

namespace Tests\Unit;

use BombenProdukt\Xit\Parser\DocumentParser;
use BombenProdukt\Xit\Renderer\DocumentRenderer;
use function Spatie\Snapshots\assertMatchesSnapshot;

it('should render the document', function (): void {
    $parser = new DocumentParser();
    $parsed = $parser->parse(xit());

    $renderer = new DocumentRenderer();

    assertMatchesSnapshot($renderer->render($parsed));
});
