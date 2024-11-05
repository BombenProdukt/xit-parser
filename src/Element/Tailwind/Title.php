<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Tailwind;

use BaseCodeOy\Xit\Element\AbstractElement;

final class Title extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div class="text-xit-title underline"><span>%s</span></div>';
    }
}
