<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Style;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\Color;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class Checked extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item checked"><span style="color: '.Color::Checked->value.';">['.ItemStatusCharacter::Checked->value.']</span><p>%s</p></div>';
    }
}
