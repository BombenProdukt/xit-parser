<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Element\Tailwind;

use BaseCodeOy\Xit\Element\AbstractElement;

final class Due extends AbstractElement
{
    #[\Override()]
    protected function getHtml(): string
    {
        return '<span class="text-xit-due">-> %s</span>';
    }
}
