<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

final class Title extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="text-xit-title underline"><span>%s</span></div>';
    }
}
