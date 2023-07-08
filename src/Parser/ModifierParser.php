<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Parser;

use BombenProdukt\Xit\Data\DocumentItemModifiers;
use BombenProdukt\Xit\RegularExpression;

final readonly class ModifierParser
{
    public function parse(string $content): DocumentItemModifiers
    {
        $modifiers = new DocumentItemModifiers();

        \preg_match(RegularExpression::PRIORITY_LINE, $content, $hasPriority);

        if ($hasPriority) {
            \preg_match(RegularExpression::PRIORITY, \trim($hasPriority[0]), $priority);

            if ($priority) {
                $modifiers->setHasPriority(true);
                $modifiers->setPriorityLevel(\mb_strlen(\str_replace('.', '', $priority[0])));
                $modifiers->setPriorityPadding(\mb_strlen(\str_replace('!', '', $priority[0])));
            }
        }

        \preg_match(RegularExpression::DUE_DATE, $content, $due);

        if ($due) {
            $modifiers->setDue($due[0]);
        }

        \preg_match_all(RegularExpression::TAG, $content, $tags);

        if (\is_array($tags)) {
            $modifiers->setTags($tags[0]);
        }

        return $modifiers;
    }
}
