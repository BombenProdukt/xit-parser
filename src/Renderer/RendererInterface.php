<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Renderer;

use BombenProdukt\Xit\Data\Document;

interface RendererInterface
{
    public function render(Document $document): string;
}
