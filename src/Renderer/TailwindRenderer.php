<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Renderer;

use BombenProdukt\Xit\Element\ElementInterface;
use BombenProdukt\Xit\Element\Tailwind\Checked;
use BombenProdukt\Xit\Element\Tailwind\Due;
use BombenProdukt\Xit\Element\Tailwind\InQuestion;
use BombenProdukt\Xit\Element\Tailwind\Obsolete;
use BombenProdukt\Xit\Element\Tailwind\Ongoing;
use BombenProdukt\Xit\Element\Tailwind\Open;
use BombenProdukt\Xit\Element\Tailwind\Priority;
use BombenProdukt\Xit\Element\Tailwind\Tag;
use BombenProdukt\Xit\Element\Tailwind\Title;

final readonly class TailwindRenderer extends AbstractHtmlRenderer
{
    protected function createCheckedElement(string $text): ElementInterface
    {
        return Checked::fromString($text);
    }

    protected function createDueElement(string $text): ElementInterface
    {
        return Due::fromString($text);
    }

    protected function createInQuestionElement(string $text): ElementInterface
    {
        return InQuestion::fromString($text);
    }

    protected function createObsoleteElement(string $text): ElementInterface
    {
        return Obsolete::fromString($text);
    }

    protected function createOngoingElement(string $text): ElementInterface
    {
        return Ongoing::fromString($text);
    }

    protected function createOpenElement(string $text): ElementInterface
    {
        return Open::fromString($text);
    }

    protected function createPriorityElement(string $text): ElementInterface
    {
        return Priority::fromString($text);
    }

    protected function createTagElement(string $text): ElementInterface
    {
        return Tag::fromString($text);
    }

    protected function createTitleElement(string $text): ElementInterface
    {
        return Title::fromString($text);
    }
}
