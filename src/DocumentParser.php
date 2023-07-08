<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

use Exception;

final readonly class DocumentParser
{
    public function __construct(private ModifierParser $modifierParser) {}

    public function parse(string $content): Document
    {
        $groups = [];

        $prevItemType = null;

        $currentGroup = new DocumentGroup();
        $groups[] = $currentGroup;

        $xitLines = \explode("\n", $content);

        foreach ($xitLines as $idx => $line) {
            if (\preg_match(LineTypePattern::TITLE, $line)) {
                $this->addXitObjectGroupLine($currentGroup, Constant::TITLE_TYPE, null, $line);

                $prevItemType = Constant::TITLE_TYPE;

                continue;
            }

            if (\preg_match(LineTypePattern::OPEN_ITEM, $line)) {
                $this->addXitObjectGroupLine($currentGroup, Constant::ITEM_TYPE, Constant::ITEM_STATUS_OPEN, $line);

                $prevItemType = Constant::ITEM_TYPE;

                continue;
            }

            if (\preg_match(LineTypePattern::CHECKED_ITEM, $line)) {
                $this->addXitObjectGroupLine($currentGroup, Constant::ITEM_TYPE, Constant::ITEM_STATUS_CHECKED, $line);

                $prevItemType = Constant::ITEM_TYPE;

                continue;
            }

            if (\preg_match(LineTypePattern::ONGOING_ITEM, $line)) {
                $this->addXitObjectGroupLine($currentGroup, Constant::ITEM_TYPE, Constant::ITEM_STATUS_ONGOING, $line);

                $prevItemType = Constant::ITEM_TYPE;

                continue;
            }

            if (\preg_match(LineTypePattern::OBSOLETE_ITEM, $line)) {
                $this->addXitObjectGroupLine($currentGroup, Constant::ITEM_TYPE, Constant::ITEM_STATUS_OBSOLETE, $line);

                $prevItemType = Constant::ITEM_TYPE;

                continue;
            }

            if (\preg_match(LineTypePattern::IN_QUESTION_ITEM, $line)) {
                $this->addXitObjectGroupLine($currentGroup, Constant::ITEM_TYPE, Constant::ITEM_STATUS_IN_QUESTION, $line);

                $prevItemType = Constant::ITEM_TYPE;

                continue;
            }

            if (($prevItemType === Constant::ITEM_TYPE || $prevItemType === Constant::ITEM_DETAILS_TYPE) && \preg_match(LineTypePattern::ITEM_DETAILS, $line)) {
                $this->addXitObjectGroupLine($currentGroup, Constant::ITEM_DETAILS_TYPE, null, $line);

                $prevItemType = Constant::ITEM_DETAILS_TYPE;

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

            throw new Exception("ParserError: One or more lines of provided Xit are invalid starting on L{$idx} with content: {$line}");
        }

        return new Document($content, $groups);
    }

    private function addXitObjectGroupLine(DocumentGroup $documentGroup, string $type, ?string $status, string $content): void
    {
        $readableContent = $content;

        if ($type === Constant::ITEM_TYPE) {
            switch ($status) {
                case Constant::ITEM_STATUS_OPEN:
                    $readableContent = \preg_replace(LineStatusDelimiterPattern::OPEN, '', $readableContent);

                    break;

                case Constant::ITEM_STATUS_CHECKED:
                    $readableContent = \preg_replace(LineStatusDelimiterPattern::CHECKED, '', $readableContent);

                    break;

                case Constant::ITEM_STATUS_ONGOING:
                    $readableContent = \preg_replace(LineStatusDelimiterPattern::ONGOING, '', $readableContent);

                    break;

                case Constant::ITEM_STATUS_OBSOLETE:
                    $readableContent = \preg_replace(LineStatusDelimiterPattern::OBSOLETE, '', $readableContent);

                    break;

                case Constant::ITEM_STATUS_IN_QUESTION:
                    $readableContent = \preg_replace(LineStatusDelimiterPattern::IN_QUESTION, '', $readableContent);

                    break;
            }
        }

        if ($type === Constant::ITEM_TYPE || $type === Constant::ITEM_DETAILS_TYPE) {
            $readableContent = \preg_replace(LineModifierPattern::PRIORITY, '', $readableContent);
            $readableContent = \preg_replace(LineModifierPattern::DUE_DATE, '', $readableContent);
            $readableContent = \preg_replace(LineModifierPattern::TAG, '', $readableContent);
        }

        $trimmedRawContent = \preg_replace("/[\n\r]*$/", '', $content);

        $documentGroup->addItem(
            new DocumentItem(
                type: $type,
                status: $status,
                content: ($type === Constant::NEWLINE_TYPE ? "\n" : \trim(\preg_replace("/[\n\r]*$/", '', $readableContent))),
                rawContent: ($type === Constant::NEWLINE_TYPE ? "\n" : $trimmedRawContent),
                modifiers: (($type === Constant::TITLE_TYPE || $type === Constant::NEWLINE_TYPE) ? null : $this->modifierParser->parse($trimmedRawContent)),
            ),
        );
    }
}
