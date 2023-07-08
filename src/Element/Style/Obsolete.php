<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Style;

use BombenProdukt\Xit\Enum\Color;

final class Obsolete extends AbstractElement
{
    protected function getStyle(): string
    {
        return \sprintf('color: %s;', Color::Obsolete->value);
    }
}
