<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Style;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\Color;

final class Title extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span style="color: '.Color::White->value.'; text-decoration: underline;">%s</span>';
    }
}
