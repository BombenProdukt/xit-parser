<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Renderer;

use BaseCodeOy\Xit\Element\ElementInterface;
use BaseCodeOy\Xit\Element\Style\Checked;
use BaseCodeOy\Xit\Element\Style\Due;
use BaseCodeOy\Xit\Element\Style\InQuestion;
use BaseCodeOy\Xit\Element\Style\Obsolete;
use BaseCodeOy\Xit\Element\Style\Ongoing;
use BaseCodeOy\Xit\Element\Style\Open;
use BaseCodeOy\Xit\Element\Style\Priority;
use BaseCodeOy\Xit\Element\Style\Tag;
use BaseCodeOy\Xit\Element\Style\Title;

final readonly class StyleRenderer extends AbstractHtmlRenderer
{
    #[\Override()]
    protected function createCheckedElement(string $text): ElementInterface
    {
        return Checked::fromString($text);
    }

    #[\Override()]
    protected function createDueElement(string $text): ElementInterface
    {
        return Due::fromString($text);
    }

    #[\Override()]
    protected function createInQuestionElement(string $text): ElementInterface
    {
        return InQuestion::fromString($text);
    }

    #[\Override()]
    protected function createObsoleteElement(string $text): ElementInterface
    {
        return Obsolete::fromString($text);
    }

    #[\Override()]
    protected function createOngoingElement(string $text): ElementInterface
    {
        return Ongoing::fromString($text);
    }

    #[\Override()]
    protected function createOpenElement(string $text): ElementInterface
    {
        return Open::fromString($text);
    }

    #[\Override()]
    protected function createPriorityElement(string $text): ElementInterface
    {
        return Priority::fromString($text);
    }

    #[\Override()]
    protected function createTagElement(string $text): ElementInterface
    {
        return Tag::fromString($text);
    }

    #[\Override()]
    protected function createTitleElement(string $text): ElementInterface
    {
        return Title::fromString($text);
    }
}
