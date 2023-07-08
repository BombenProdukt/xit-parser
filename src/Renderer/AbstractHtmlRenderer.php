<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Renderer;

use BombenProdukt\Xit\Data\Document;
use BombenProdukt\Xit\Element\ElementInterface;
use BombenProdukt\Xit\Enum\ItemStatus;
use BombenProdukt\Xit\Enum\ItemType;

abstract readonly class AbstractHtmlRenderer implements RendererInterface
{
    public function render(Document $document): string
    {
        $rendered = '';

        foreach ($document->getGroups() as $group) {
            foreach ($group->getItems() as $line) {
                if ($line->getType() === ItemType::Title) {
                    $rendered .= $this->createTitleElement($line->getContent());

                    continue;
                }

                if ($line->getType() === ItemType::Item || $line->getType() === ItemType::ItemDetails) {
                    $lineContent = '';

                    if ($line->getModifiers()->getHasPriority()) {
                        $priority = '';

                        for ($priorityPadding = 1; $priorityPadding <= $line->getModifiers()->getPriorityPadding(); $priorityPadding++) {
                            $priority .= '.';
                        }

                        for ($priorityLevel = 1; $priorityLevel <= $line->getModifiers()->getPriorityLevel(); $priorityLevel++) {
                            $priority .= '!';
                        }

                        $lineContent .= $this->createPriorityElement($priority).' ';
                    }

                    $lineContent .= $line->getContent();

                    if (\count($line->getModifiers()->getTags())) {
                        foreach ($line->getModifiers()->getTags() as $tag) {
                            $lineContent .= $this->createTagElement($tag).' ';
                        }
                    }

                    if ($line->getModifiers()->getDue() !== null) {
                        $lineContent .= $this->createDueElement($line->getModifiers()->getDue());
                    }

                    if ($line->getStatus()) {
                        $rendered .= match ($line->getStatus()) {
                            ItemStatus::Open => $this->createOpenElement($lineContent),
                            ItemStatus::Checked => $this->createCheckedElement($lineContent),
                            ItemStatus::Ongoing => $this->createOngoingElement($lineContent),
                            ItemStatus::Obsolete => $this->createObsoleteElement($lineContent),
                            ItemStatus::InQuestion => $this->createInQuestionElement($lineContent),
                        };
                    } else {
                        $rendered .= $line->getContent().' ';
                    }
                }
            }
        }

        return \trim($rendered);
    }

    abstract protected function createCheckedElement(string $text): ElementInterface;

    abstract protected function createDueElement(string $text): ElementInterface;

    abstract protected function createInQuestionElement(string $text): ElementInterface;

    abstract protected function createObsoleteElement(string $text): ElementInterface;

    abstract protected function createOngoingElement(string $text): ElementInterface;

    abstract protected function createOpenElement(string $text): ElementInterface;

    abstract protected function createPriorityElement(string $text): ElementInterface;

    abstract protected function createTagElement(string $text): ElementInterface;

    abstract protected function createTitleElement(string $text): ElementInterface;
}
