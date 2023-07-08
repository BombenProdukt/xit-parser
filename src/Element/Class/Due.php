<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

final class Due extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span class="due">-> %s</span>';
    }
}
