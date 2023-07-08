<?php

declare(strict_types=1);

namespace Tests\Unit;

use BombenProdukt\XitParser\DocumentParser;
use BombenProdukt\XitParser\DocumentRenderer;
use BombenProdukt\XitParser\ModifierParser;
use function Spatie\Snapshots\assertMatchesSnapshot;

it('should render the document', function (): void {
    $parser = new DocumentParser(new ModifierParser());
    $parsed = $parser->parse(\file_get_contents(__DIR__.'/../Fixtures/test.xit'));

    $renderer = new DocumentRenderer();

    assertMatchesSnapshot($renderer->render($parsed));
});
