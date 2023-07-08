<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Open extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div><span class="text-xit-open">['.ItemStatusCharacter::Open->value.']</span><p>%s</p></div>';
    }
}
