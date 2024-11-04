<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Class;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class Open extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item open"><span class="checkbox">['.ItemStatusCharacter::Open->value.']</span><p>%s</p></div>';
    }
}
