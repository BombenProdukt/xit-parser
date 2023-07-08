<?php

declare(strict_types=1);

namespace BombenProdukt\Xit;

final readonly class LineModifierPattern
{
    public const PRIORITY_LINE = '/^.*([!]|[.]*[!]){1,} .*/m';

    public const PRIORITY = '/[!.]{1,} /m';

    public const DUE_DATE = '/((\d{4})((([-\/])(0[1-9]|1[0-2])(\5(0[1-9]|[1-2]\d|3[0-1])?)?)|([-\/](W(0[1-9]|[1-4]\d|5[0-3])|Q[1-4])))?)(?![\-\/])(?=[\p{P} ]|$)/m';

    public const TAG = '/((?<=[\s\p{P}])\#[\p{L}\d_-]+)(=((\'.*\')|(".*")|([\p{L}\d_-]+)))?/m';
}
