<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Obsolete extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div><span class="text-xit-obsolete">['.ItemStatusCharacter::Obsolete->value.']</span><p>%s</p></div>';
    }
}
