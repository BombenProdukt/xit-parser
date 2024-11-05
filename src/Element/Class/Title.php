<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Class;

use BaseCodeOy\Xit\Element\AbstractElement;

final class Title extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item title"><span>%s</span></div>';
    }
}
