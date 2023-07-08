<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

use BombenProdukt\Xit\Data\Document;

final readonly class DocumentRenderer
{
    public function render(Document $document): string
    {
        $rendered = '';

        foreach ($document->getGroups() as $group) {
            foreach ($group->getItems() as $line) {
                if ($line->getType() === Constant::TITLE_TYPE) {
                    $rendered .= $line->getContent()."\n";

                    continue;
                }

                if ($line->getType() === Constant::ITEM_TYPE || Constant::ITEM_DETAILS_TYPE) {
                    switch ($line->getStatus()) {
                        case Constant::ITEM_STATUS_OPEN:
                            $rendered .= Constant::ITEM_LEFT_SYM.Constant::ITEM_STATUS_OPEN_SYM.Constant::ITEM_RIGHT_SYM.' ';

                            break;

                        case Constant::ITEM_STATUS_CHECKED:
                            $rendered .= Constant::ITEM_LEFT_SYM.Constant::ITEM_STATUS_CHECKED_SYM.Constant::ITEM_RIGHT_SYM.' ';

                            break;

                        case Constant::ITEM_STATUS_ONGOING:
                            $rendered .= Constant::ITEM_LEFT_SYM.Constant::ITEM_STATUS_ONGOING_SYM.Constant::ITEM_RIGHT_SYM.' ';

                            break;

                        case Constant::ITEM_STATUS_OBSOLETE:
                            $rendered .= Constant::ITEM_LEFT_SYM.Constant::ITEM_STATUS_OBSOLETE_SYM.Constant::ITEM_RIGHT_SYM.' ';

                            break;

                        case Constant::ITEM_STATUS_IN_QUESTION:
                            $rendered .= Constant::ITEM_LEFT_SYM.Constant::ITEM_STATUS_IN_QUESTION_SYM.Constant::ITEM_RIGHT_SYM.' ';

                            break;
                    }

                    if ($line->getModifiers()->getHasPriority()) {
                        for ($priorityPadding = 1; $priorityPadding <= $line->getModifiers()->getPriorityPadding(); $priorityPadding++) {
                            $rendered .= '.';
                        }

                        for ($priorityLevel = 1; $priorityLevel <= $line->getModifiers()->getPriorityLevel(); $priorityLevel++) {
                            $rendered .= '!';
                        }

                        $rendered .= ' ';
                    }

                    $rendered .= $line->getContent().' ';

                    if (\count($line->getModifiers()->getTags())) {
                        $rendered .= \implode(' ', $line->getModifiers()->getTags()).' ';
                    }

                    if ($line->getModifiers()->getDue() !== null) {
                        $rendered .= '-> '.$line->getModifiers()->getDue();
                    }

                    $rendered .= '\n';
                }
            }

            $rendered .= '\n';
        }

        return \trim($rendered).'\n';
    }
}
