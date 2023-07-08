<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Obsolete extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item obsolete"><span class="checkbox">['.ItemStatusCharacter::Obsolete->value.']</span><p>%s</p></div>';
    }
}
