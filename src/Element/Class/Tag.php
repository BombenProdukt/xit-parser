<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Class;

use BaseCodeOy\Xit\Element\AbstractElement;

final class Tag extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span class="tag">%s</span>';
    }
}
