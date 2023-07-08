<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Parser;

use BombenProdukt\Xit\Data\Document;
use BombenProdukt\Xit\Data\DocumentGroup;
use BombenProdukt\Xit\Data\DocumentItem;
use BombenProdukt\Xit\Enum\ItemStatus;
use BombenProdukt\Xit\Enum\ItemType;
use BombenProdukt\Xit\RegularExpression;
use Exception;

final readonly class DocumentParser
{
    private ModifierParser $modifierParser;

    public function __construct()
    {
        $this->modifierParser = new ModifierParser();
    }

    public function parse(string $content): Document
    {
        $groups = [];

        $prevItemType = null;

        $currentGroup = new DocumentGroup();
        $groups[] = $currentGroup;

        foreach (\explode("\n", $content) as $lineNumber => $line) {
            if (\preg_match(RegularExpression::TITLE, $line)) {
                $this->addDocumentItem($currentGroup, ItemType::Title, null, $line);

                $prevItemType = ItemType::Title;

                continue;
            }

            if (\preg_match(RegularExpression::OPEN_ITEM, $line)) {
                $this->addDocumentItem($currentGroup, ItemType::Item, ItemStatus::Open, $line);

                $prevItemType = ItemType::Item;

                continue;
            }

            if (\preg_match(RegularExpression::CHECKED_ITEM, $line)) {
                $this->addDocumentItem($currentGroup, ItemType::Item, ItemStatus::Checked, $line);

                $prevItemType = ItemType::Item;

                continue;
            }

            if (\preg_match(RegularExpression::ONGOING_ITEM, $line)) {
                $this->addDocumentItem($currentGroup, ItemType::Item, ItemStatus::Ongoing, $line);

                $prevItemType = ItemType::Item;

                continue;
            }

            if (\preg_match(RegularExpression::OBSOLETE_ITEM, $line)) {
                $this->addDocumentItem($currentGroup, ItemType::Item, ItemStatus::Obsolete, $line);

                $prevItemType = ItemType::Item;

                continue;
            }

            if (\preg_match(RegularExpression::IN_QUESTION_ITEM, $line)) {
                $this->addDocumentItem($currentGroup, ItemType::Item, ItemStatus::InQuestion, $line);

                $prevItemType = ItemType::Item;

                continue;
            }

            if (($prevItemType === ItemType::Item || $prevItemType === ItemType::ItemDetails) && \preg_match(RegularExpression::ITEM_DETAILS, $line)) {
                $this->addDocumentItem($currentGroup, ItemType::ItemDetails, null, $line);

                $prevItemType = ItemType::ItemDetails;

                continue;
            }

            if (\preg_match("/^[\n\r]*/m", $line)) {
                if ($prevItemType !== null) {
                    $currentGroup = new DocumentGroup();
                    $groups[] = $currentGroup;
                }

                $prevItemType = null;

                continue;
            }

            throw new Exception("One or more lines of provided are invalid starting at L{$lineNumber}: {$line}");
        }

        return new Document($content, $groups);
    }

    private function addDocumentItem(DocumentGroup $documentGroup, ItemType $type, ?ItemStatus $status, string $content): void
    {
        $readableContent = $content;

        if ($type === ItemType::Item) {
            switch ($status) {
                case ItemStatus::Open:
                    $readableContent = \preg_replace(RegularExpression::OPEN_ITEM, '', $readableContent);

                    break;

                case ItemStatus::Checked:
                    $readableContent = \preg_replace(RegularExpression::CHECKED_ITEM, '', $readableContent);

                    break;

                case ItemStatus::Ongoing:
                    $readableContent = \preg_replace(RegularExpression::ONGOING_ITEM, '', $readableContent);

                    break;

                case ItemStatus::Obsolete:
                    $readableContent = \preg_replace(RegularExpression::OBSOLETE_ITEM, '', $readableContent);

                    break;

                case ItemStatus::InQuestion:
                    $readableContent = \preg_replace(RegularExpression::IN_QUESTION_ITEM, '', $readableContent);

                    break;
            }
        }

        if ($type === ItemType::Item || $type === ItemType::ItemDetails) {
            $readableContent = \preg_replace(RegularExpression::PRIORITY, '', $readableContent);
            $readableContent = \preg_replace(RegularExpression::DUE_DATE, '', $readableContent);
            $readableContent = \preg_replace(RegularExpression::TAG, '', $readableContent);
        }

        $documentItem = new DocumentItem($type, $status);

        if ($type === ItemType::Newline) {
            $documentItem->setContent("\n");
        } else {
            $documentItem->setContent(\trim(\preg_replace("/[\n\r]*$/", '', $readableContent)));
        }

        $trimmedRawContent = \preg_replace("/[\n\r]*$/", '', $content);

        if ($type === ItemType::Newline) {
            $documentItem->setRawContent("\n");
        } else {
            $documentItem->setRawContent($trimmedRawContent);
        }

        if ($type === ItemType::Title || $type === ItemType::Newline) {
            $documentItem->setModifiers(null);
        } else {
            $documentItem->setModifiers($this->modifierParser->parse($trimmedRawContent));
        }

        $documentGroup->addItem($documentItem);
    }
}
