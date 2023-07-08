<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

final readonly class LineTypePattern
{
    public const TITLE = '/^([a-zA-Z0-9].*|\[(?!x\])[a-zA-Z0-9].*)/m';

    public const OPEN_ITEM = '/^\[ \](?= |$)/m';

    public const CHECKED_ITEM = '/^\[x\](?= |$)/m';

    public const ONGOING_ITEM = '/^\[@\](?= |$)/m';

    public const OBSOLETE_ITEM = '/^\[~\](?= |$)/m';

    public const IN_QUESTION_ITEM = '/^\[\?\](?= |$)/m';

    public const ITEM_DETAILS = '/^([\t]+|[ ]{4}).*/m';
}
