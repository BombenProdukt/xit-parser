<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class Checked extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item checked"><span class="checkbox">['.ItemStatusCharacter::Checked->value.']</span><p>%s</p></div>';
    }
}
