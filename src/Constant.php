<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

final readonly class Constant
{
    public const TITLE_TYPE = 'title';

    public const ITEM_TYPE = 'item';

    public const ITEM_LEFT_SYM = '[';

    public const ITEM_RIGHT_SYM = ']';

    public const ITEM_STATUS_OPEN = 'open';

    public const ITEM_STATUS_OPEN_SYM = ' ';

    public const ITEM_STATUS_CHECKED = 'checked';

    public const ITEM_STATUS_CHECKED_SYM = 'x';

    public const ITEM_STATUS_ONGOING = 'ongoing';

    public const ITEM_STATUS_ONGOING_SYM = '@';

    public const ITEM_STATUS_OBSOLETE = 'obsolete';

    public const ITEM_STATUS_OBSOLETE_SYM = '~';

    public const ITEM_STATUS_IN_QUESTION = 'in-question';

    public const ITEM_STATUS_IN_QUESTION_SYM = '?';

    public const ITEM_DETAILS_TYPE = 'details';

    public const NEWLINE_TYPE = 'newline';

    public const PRIORITY_MOD_TYPE = 'priority';

    public const DUE_DATE_MOD_TYPE = 'due';

    public const TAG_MOD_TYPE = 'tag';
}
