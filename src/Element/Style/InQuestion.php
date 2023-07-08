<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Style;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\Color;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class InQuestion extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item in-question"><span style="color: '.Color::InQuestion->value.';">['.ItemStatusCharacter::InQuestion->value.']</span><p>%s</p></div>';
    }
}
