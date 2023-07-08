<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Renderer;

use BombenProdukt\Xit\Element\Class\Checked;
use BombenProdukt\Xit\Element\Class\Due;
use BombenProdukt\Xit\Element\Class\InQuestion;
use BombenProdukt\Xit\Element\Class\Obsolete;
use BombenProdukt\Xit\Element\Class\Ongoing;
use BombenProdukt\Xit\Element\Class\Open;
use BombenProdukt\Xit\Element\Class\Priority;
use BombenProdukt\Xit\Element\Class\Tag;
use BombenProdukt\Xit\Element\Class\Title;
use BombenProdukt\Xit\Element\ElementInterface;

final readonly class ClassRenderer extends AbstractHtmlRenderer
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
