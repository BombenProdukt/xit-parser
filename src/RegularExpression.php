<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Xit;

final readonly class RegularExpression
{
    // Types
    public const string TITLE = '/^([a-zA-Z0-9].*|\[(?!x\])[a-zA-Z0-9].*)/m';

    public const string ITEM_DETAILS = '/^([\t]+|[ ]{4}).*/m';

    // Status
    public const string OPEN_ITEM = '/^\[ \](?= |$)/m';

    public const string CHECKED_ITEM = '/^\[x\](?= |$)/m';

    public const string ONGOING_ITEM = '/^\[@\](?= |$)/m';

    public const string OBSOLETE_ITEM = '/^\[~\](?= |$)/m';

    public const string IN_QUESTION_ITEM = '/^\[\?\](?= |$)/m';

    // Modifiers
    public const string PRIORITY_LINE = '/^.*([!]|[.]*[!]){1,} .*/m';

    public const string PRIORITY = '/[!.]{1,} /m';

    public const string DUE_DATE = '/((\d{4})((([-\/])(0[1-9]|1[0-2])(\5(0[1-9]|[1-2]\d|3[0-1])?)?)|([-\/](W(0[1-9]|[1-4]\d|5[0-3])|Q[1-4])))?)(?![\-\/])(?=[\p{P} ]|$)/m';

    public const string TAG = '/((?<=[\s\p{P}])\#[\p{L}\d_-]+)(=((\'.*\')|(".*")|([\p{L}\d_-]+)))?/m';
}
