<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Element\Style;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\Color;

final class Priority extends AbstractElement
{
    public function getHtml(): string
    {
        return '<span style="color: '.Color::Priority->value.';">%s</span>';
    }
}
