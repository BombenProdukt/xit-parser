<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

final class Priority extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span class="priority">%s</span>';
    }
}
