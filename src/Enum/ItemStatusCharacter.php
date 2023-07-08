<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Enum;

enum ItemStatusCharacter: string
{
    case Open = ' ';

    case Checked = 'x';

    case Ongoing = '@';

    case Obsolete = '~';

    case InQuestion = '?';
}
