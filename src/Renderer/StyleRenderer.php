<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Renderer;

use BombenProdukt\Xit\Element\ElementInterface;
use BombenProdukt\Xit\Element\Style\Checked;
use BombenProdukt\Xit\Element\Style\Due;
use BombenProdukt\Xit\Element\Style\InQuestion;
use BombenProdukt\Xit\Element\Style\Obsolete;
use BombenProdukt\Xit\Element\Style\Ongoing;
use BombenProdukt\Xit\Element\Style\Open;
use BombenProdukt\Xit\Element\Style\Priority;
use BombenProdukt\Xit\Element\Style\Tag;
use BombenProdukt\Xit\Element\Style\Title;

final readonly class StyleRenderer extends AbstractHtmlRenderer
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
