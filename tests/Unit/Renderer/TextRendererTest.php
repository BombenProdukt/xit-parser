<?php

declare(strict_types=1);

namespace Tests\Unit\Renderer;

use BaseCodeOy\Xit\Parser\DocumentParser;
use BaseCodeOy\Xit\Renderer\TextRenderer;
use function Spatie\Snapshots\assertMatchesSnapshot;

it('should render the document', function (): void {
    $parser = new DocumentParser();
    $parsed = $parser->parse(xit());

    $renderer = new TextRenderer();

    assertMatchesSnapshot($renderer->render($parsed));
});
