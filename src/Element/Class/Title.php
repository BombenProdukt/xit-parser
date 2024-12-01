<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Element\Class;

use BaseCodeOy\Xit\Element\AbstractElement;

final class Title extends AbstractElement
{
    #[\Override()]
    protected function getHtml(): string
    {
        return '<div class="item title"><span>%s</span></div>';
    }
}
