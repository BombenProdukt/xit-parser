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
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class Obsolete extends AbstractElement
{
    #[\Override()]
    protected function getHtml(): string
    {
        return '<div class="item obsolete"><span style="color: '.Color::Obsolete->value.';">['.ItemStatusCharacter::Obsolete->value.']</span><p>%s</p></div>';
    }
}
