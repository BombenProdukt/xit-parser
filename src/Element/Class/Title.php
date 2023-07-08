<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

final class Title extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="item title"><span>%s</span></div>';
    }
}
