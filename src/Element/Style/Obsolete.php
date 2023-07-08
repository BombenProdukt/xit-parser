<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Style;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\Color;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Obsolete extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item obsolete"><span style="color: '.Color::Obsolete->value.';">['.ItemStatusCharacter::Obsolete->value.']</span><p>%s</p></div>';
    }
}
