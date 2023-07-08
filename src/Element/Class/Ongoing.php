<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Ongoing extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item ongoing"><span class="checkbox">['.ItemStatusCharacter::Ongoing->value.']</span><p>%s</p></div>';
    }
}
