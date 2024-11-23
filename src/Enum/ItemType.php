<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Enum;

enum ItemType: string
{
    case GroupTitle = 'group_title';

    case ItemContinuation = 'item_continuation';

    case ItemStart = 'item_start';

    case NewLine = 'new_line';
}
