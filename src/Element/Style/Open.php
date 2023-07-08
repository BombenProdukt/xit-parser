<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Style;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\Color;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Open extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item open"><span style="color: '.Color::Open->value.';">['.ItemStatusCharacter::Open->value.']</span><p>%s</p></div>';
    }
}
