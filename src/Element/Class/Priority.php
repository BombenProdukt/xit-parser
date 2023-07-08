<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

use BombenProdukt\Xit\Element\AbstractElement;

final class Priority extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span class="priority">%s</span>';
    }
}
