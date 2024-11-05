<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Class;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class Checked extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item checked"><span class="checkbox">['.ItemStatusCharacter::Checked->value.']</span><p>%s</p></div>';
    }
}
