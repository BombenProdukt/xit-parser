<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Element\Tailwind;

use BaseCodeOy\Xit\Element\AbstractElement;
use BaseCodeOy\Xit\Enum\ItemStatusCharacter;

final class InQuestion extends AbstractElement
{
    #[\Override()]
    protected function getHtml(): string
    {
        return '<div><span class="text-xit-in-question">['.ItemStatusCharacter::InQuestion->value.']</span><p>%s</p></div>';
    }
}
