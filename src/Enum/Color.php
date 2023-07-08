<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Enum;

enum Color: string
{
    case White = '#ffffff';

    case Black = '#112026';

    case Gray = '#8f8f8f';

    case Open = '#73daff';

    case Checked = '#a9ff6b';

    case Ongoing = '#f199ff';

    case Obsolete = '#8f8f8f';

    case InQuestion = '#ffd610';

    case Priority = '#ff0550';

    case Due = '#f0eaa8';

    case Tag = '#8cb1be';
}
