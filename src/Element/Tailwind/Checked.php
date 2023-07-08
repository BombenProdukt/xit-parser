<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Checked extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div><span class="text-xit-checked">['.ItemStatusCharacter::Checked->value.']</span><p>%s</p></div>';
    }
}
