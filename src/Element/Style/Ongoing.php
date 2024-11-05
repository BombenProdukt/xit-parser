<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Style;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\Color;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class Ongoing extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item ongoing"><span style="color: '.Color::Ongoing->value.';">['.ItemStatusCharacter::Ongoing->value.']</span><p>%s</p></div>';
    }
}
