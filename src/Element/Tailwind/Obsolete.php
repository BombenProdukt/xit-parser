<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

final class Obsolete extends AbstractElement
{
    protected function getClass(): string
    {
        return 'text-xit-obsolete';
    }
}
