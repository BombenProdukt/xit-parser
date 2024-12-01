<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Renderer;

use BaseCodeOy\Xit\Parser\DocumentParser;
use BaseCodeOy\Xit\Renderer\TextRenderer;

it('should render the document', function (): void {
    $parser = new DocumentParser();
    $document = $parser->parse(xit());

    $renderer = new TextRenderer();

    expect($renderer->render($document))->toMatchSnapshot();
});
