<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

final class Checked extends AbstractElement
{
    protected function getClass(): string
    {
        return 'text-xit-checked';
    }
}
