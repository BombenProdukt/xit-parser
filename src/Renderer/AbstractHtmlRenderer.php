<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Renderer;

use BombenProdukt\Xit\Data\Document;
use BombenProdukt\Xit\Data\DocumentItem;
use BombenProdukt\Xit\Element\ElementInterface;
use BombenProdukt\Xit\Enum\ItemStatus;
use BombenProdukt\Xit\Enum\ItemType;

abstract readonly class AbstractHtmlRenderer implements RendererInterface
{
    public function render(Document $document): string
    {
        $rendered = '';

        foreach ($document->getGroups() as $group) {
            $items = $group->getItems();

            $currentItemContent = '';

            foreach ($items as $itemIndex => $item) {
                if ($item->getType() === ItemType::Title) {
                    $rendered .= $this->createTitleElement($item->getContent());

                    continue;
                }

                if ($item->getType() === ItemType::Item) {
                    $currentItemStatus = $item->getStatus();
                    $currentItemContent = $this->parseItem($item);
                }

                if ($item->getType() === ItemType::ItemDetails) {
                    $currentItemContent .= $this->parseItem($item).'<br>';
                }

                // We are reaching a new item...
                $nextLine = $items[$itemIndex + 1] ?? null;

                if ($nextLine?->getType() === ItemType::Item) {
                    $rendered .= $this->renderItem($currentItemStatus, \trim($currentItemContent, '<br>'));

                    continue;
                }

                // We reached the final item for this group...
                if (\count($items) === $itemIndex + 1) {
                    $rendered .= $this->renderItem($currentItemStatus, \trim($currentItemContent, '<br>'));
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

    private function parseItem(DocumentItem $item): string
    {
        $itemContent = $item->getRawContent();

        if ($item->getModifiers()->getHasPriority()) {
            $priority = \str_repeat('.', $item->getModifiers()->getPriorityPadding());
            $priority .= \str_repeat('!', $item->getModifiers()->getPriorityLevel());

            $itemContent = \str_replace(
                $priority,
                (string) $this->createPriorityElement($priority),
                $itemContent,
            );
        }

        if (\count($item->getModifiers()->getTags())) {
            foreach ($item->getModifiers()->getTags() as $tag) {
                $itemContent = \str_replace(
                    $tag,
                    (string) $this->createTagElement($tag),
                    $itemContent,
                );
            }
        }

        if ($item->getModifiers()->getDue() !== null) {
            $itemContent = \str_replace(
                $item->getModifiers()->getDue(),
                (string) $this->createDueElement($item->getModifiers()->getDue()),
                $itemContent,
            );
        }

        return \trim($itemContent);
    }

    private function renderItem(ItemStatus $status, string $content): ElementInterface
    {
        $content = \mb_substr($content, 4);

        return match ($status) {
            ItemStatus::Open => $this->createOpenElement($content),
            ItemStatus::Checked => $this->createCheckedElement($content),
            ItemStatus::Ongoing => $this->createOngoingElement($content),
            ItemStatus::Obsolete => $this->createObsoleteElement($content),
            ItemStatus::InQuestion => $this->createInQuestionElement($content),
        };
    }
}
