<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit\Parser;

use BaseCodeOy\Xit\Data\DocumentItemModifiers;
use BaseCodeOy\Xit\RegularExpression;

final readonly class ModifierParser
{
    public function parse(string $content): DocumentItemModifiers
    {
        $documentItemModifiers = new DocumentItemModifiers();

        \preg_match(RegularExpression::PRIORITY_LINE, $content, $hasPriority);

        if ($hasPriority !== []) {
            \preg_match(RegularExpression::PRIORITY, \trim($hasPriority[0]), $priority);

            if ($priority !== []) {
                $documentItemModifiers->setHasPriority(true);
                $documentItemModifiers->setPriorityLevel(\mb_strlen(\trim(\str_replace('.', '', $priority[0]))));
                $documentItemModifiers->setPriorityPadding(\mb_strlen(\trim(\str_replace('!', '', $priority[0]))));
            }
        }

        \preg_match(RegularExpression::DUE_DATE, $content, $due);

        if ($due !== []) {
            $documentItemModifiers->setDue($due[0]);
        }

        \preg_match_all(RegularExpression::TAG, $content, $tags);

        $documentItemModifiers->setTags($tags[0]);

        return $documentItemModifiers;
    }
}
