<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Style;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\Color;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Checked extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item checked"><span style="color: '.Color::Checked->value.';">['.ItemStatusCharacter::Checked->value.']</span><p>%s</p></div>';
    }
}
