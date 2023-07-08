<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

final class Tag extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span class="tag">%s</span>';
    }
}
