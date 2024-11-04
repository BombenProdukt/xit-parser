<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Class;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class Ongoing extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item ongoing"><span class="checkbox">['.ItemStatusCharacter::Ongoing->value.']</span><p>%s</p></div>';
    }
}
