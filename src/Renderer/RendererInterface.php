<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Renderer;

use BaseCodeOy\Xit\Data\Document;

interface RendererInterface
{
    public function render(Document $document): string;
}
