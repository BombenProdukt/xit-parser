<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

use BombenProdukt\Xit\Element\AbstractElement;

final class Title extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="text-xit-title underline"><span>%s</span></div>';
    }
}
