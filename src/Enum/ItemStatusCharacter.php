<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Enum;

enum ItemStatusCharacter: string
{
    case Open = ' ';

    case Checked = 'x';

    case Ongoing = '@';

    case Obsolete = '~';

    case InQuestion = '?';
}
