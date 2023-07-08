<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Open extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item open"><span class="checkbox">['.ItemStatusCharacter::Open->value.']</span><p>%s</p></div>';
    }
}
