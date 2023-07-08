<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Tailwind;

final class Due extends AbstractElement
{
    protected function getClass(): string
    {
        return 'text-xit-due';
    }
}
