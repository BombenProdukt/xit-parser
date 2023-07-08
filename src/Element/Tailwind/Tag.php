<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

use BombenProdukt\Xit\Element\AbstractElement;

final class Tag extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span class="text-xit-tag">%s</span>';
    }
}
