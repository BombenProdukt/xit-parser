<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Style;

use BombenProdukt\Xit\Element\AbstractElement;
use BombenProdukt\Xit\Enum\Color;

final class Tag extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span style="color: '.Color::Tag->value.';">%s</span>';
    }
}
