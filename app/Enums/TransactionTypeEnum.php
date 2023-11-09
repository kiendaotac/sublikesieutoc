<?php

namespace App\Enums;

enum TransactionTypeEnum: string
{
    case DEPOSIT = 'DEPOSIT';
    case WITHDRAW = 'WITHDRAW';
    case REFUND = 'REFUND';
    case PURCHASE = 'PURCHASE';

    public static function toArray(): array
    {
        return array_map(function ($item) {
            return $item->value;
        }, self::cases());
    }
}
