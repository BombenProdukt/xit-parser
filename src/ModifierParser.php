<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

final readonly class ModifierParser
{
    public function parse(string $content): DocumentItemModifiers
    {
        $modifiers = new DocumentItemModifiers();

        \preg_match(LineModifierPattern::PRIORITY_LINE, $content, $hasPriority);

        if ($hasPriority) {
            \preg_match(LineModifierPattern::PRIORITY, \trim($hasPriority[0]), $priority);

            if ($priority) {
                $modifiers->setHasPriority(true);
                $modifiers->setPriorityLevel(\mb_strlen(\str_replace('.', '', $priority[0])));
                $modifiers->setPriorityPadding(\mb_strlen(\str_replace('!', '', $priority[0])));
            }
        }

        \preg_match(LineModifierPattern::DUE_DATE, $content, $due);

        if ($due) {
            $modifiers->setDue($due[0]);
        }

        \preg_match_all(LineModifierPattern::TAG, $content, $tags);

        if (\is_array($tags)) {
            $modifiers->setTags($tags[0]);
        }

        return $modifiers;
    }
}
