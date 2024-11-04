<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Tailwind;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class Ongoing extends AbstractElement
{
    public function getHtml(): string
    {
        return '<div><span class="text-xit-ongoing">['.ItemStatusCharacter::Ongoing->value.']</span><p>%s</p></div>';
    }
}
