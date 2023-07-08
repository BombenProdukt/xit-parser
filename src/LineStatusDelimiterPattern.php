<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

/**
 * @see https://github.com/jotaen/xit-sublime/blob/main/xit.sublime-syntax
 */
final readonly class LineStatusDelimiterPattern
{
    public const OPEN = '/^\[ \](?= |$)/m';

    public const CHECKED = '/^\[x\](?= |$)/m';

    public const ONGOING = '/^\[@\](?= |$)/m';

    public const OBSOLETE = '/^\[~\](?= |$)/m';

    public const IN_QUESTION = '/^\[\?\](?= |$)/m';
}
