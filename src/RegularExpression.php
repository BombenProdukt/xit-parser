<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

final readonly class RegularExpression
{
    // Types
    public const TITLE = '/^([a-zA-Z0-9].*|\[(?!x\])[a-zA-Z0-9].*)/m';

    public const ITEM_DETAILS = '/^([\t]+|[ ]{4}).*/m';

    // Status
    public const OPEN_ITEM = '/^\[ \](?= |$)/m';

    public const CHECKED_ITEM = '/^\[x\](?= |$)/m';

    public const ONGOING_ITEM = '/^\[@\](?= |$)/m';

    public const OBSOLETE_ITEM = '/^\[~\](?= |$)/m';

    public const IN_QUESTION_ITEM = '/^\[\?\](?= |$)/m';

    // Modifiers
    public const PRIORITY_LINE = '/^.*([!]|[.]*[!]){1,} .*/m';

    public const PRIORITY = '/[!.]{1,} /m';

    public const DUE_DATE = '/((\d{4})((([-\/])(0[1-9]|1[0-2])(\5(0[1-9]|[1-2]\d|3[0-1])?)?)|([-\/](W(0[1-9]|[1-4]\d|5[0-3])|Q[1-4])))?)(?![\-\/])(?=[\p{P} ]|$)/m';

    public const TAG = '/((?<=[\s\p{P}])\#[\p{L}\d_-]+)(=((\'.*\')|(".*")|([\p{L}\d_-]+)))?/m';
}
