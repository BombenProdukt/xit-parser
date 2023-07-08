<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Style;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\Color;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Ongoing extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item ongoing"><span style="color: '.Color::Ongoing->value.';">['.ItemStatusCharacter::Ongoing->value.']</span><p>%s</p></div>';
    }
}
