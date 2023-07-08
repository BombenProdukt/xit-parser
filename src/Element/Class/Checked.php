<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Element\Class;

final class Checked extends AbstractElement
{
    protected function getClass(): string
    {
        return 'xit-checked';
    }
}
