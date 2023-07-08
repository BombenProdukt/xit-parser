<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Enum;

enum ItemType: string
{
    case Title = 'title';

    case Item = 'item';

    case ItemDetails = 'details';

    case Newline = 'newline';
}
