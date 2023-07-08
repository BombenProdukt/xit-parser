<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\ItemStatusCharacter;

final class InQuestion extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item in-question"><span class="checkbox">['.ItemStatusCharacter::InQuestion->value.']</span><p>%s</p></div>';
    }
}
