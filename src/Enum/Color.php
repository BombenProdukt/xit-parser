<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Enum;

enum Color: string
{
    case White = '#ffffff';

    case Black = '#112026';

    case Open = '#73daff';

    case Checked = '#a9ff6b';

    case Ongoing = '#f199ff';

    case Obsolete = '#8f8f8f';

    case InQuestion = '#ffd610';

    case Priority = '#ff0550';

    case Due = '#f0eaa8';

    case Tag = '#8cb1be';
}
