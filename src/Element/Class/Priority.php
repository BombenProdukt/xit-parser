<?php

declare(strict_types=1);

namespace BaseCodeOy\Xit\Element\Class;

use BaseCodeOy\Xit\Element\AbstractElement;

final class Priority extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span class="priority">%s</span>';
    }
}
