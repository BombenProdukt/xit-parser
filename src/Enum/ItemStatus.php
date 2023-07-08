<?php

declare(strict_types=1);

namespace BombenProdukt\Xit\Enum;

use Exception;

enum ItemStatus: string
{
    case Open = 'open';

    case Checked = 'checked';

    case Ongoing = 'ongoing';

    case Obsolete = 'obsolete';

    case InQuestion = 'in-question';

    public static function fromString(string $status): self
    {
        return match ($status) {
            'open' => self::Open,
            'checked' => self::Checked,
            'ongoing' => self::Ongoing,
            'obsolete' => self::Obsolete,
            'in-question' => self::InQuestion,
            default => throw new Exception("Invalid item status: {$status}"),
        };
    }
}
