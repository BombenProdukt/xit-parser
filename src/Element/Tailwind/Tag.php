<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

final class Tag extends AbstractElement
{
    protected function getClass(): string
    {
        return 'text-xit-tag';
    }
}
