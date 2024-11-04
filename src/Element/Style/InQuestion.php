<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Style;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\Color;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class InQuestion extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item in-question"><span style="color: '.Color::InQuestion->value.';">['.ItemStatusCharacter::InQuestion->value.']</span><p>%s</p></div>';
    }
}
