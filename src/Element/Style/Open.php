<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Style;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\Color;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class Open extends AbstractElement
{
    protected function getHtml(): string
    {
        return '<div class="item open"><span style="color: '.Color::Open->value.';">['.ItemStatusCharacter::Open->value.']</span><p>%s</p></div>';
    }
}
