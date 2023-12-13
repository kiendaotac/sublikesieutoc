<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum DiscountTypeEnum: string implements HasLabel
{
    case PERCENT = 'percent';
    case AMOUNT = 'amount';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::PERCENT => 'Phần trăm',
            self::AMOUNT => 'Số tiền'
        };
    }
}
