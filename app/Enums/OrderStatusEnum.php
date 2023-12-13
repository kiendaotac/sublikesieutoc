<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum OrderStatusEnum: string implements HasLabel, HasColor
{
    case STATUS_PENDING = 'pending';
    case PROCESSING = 'processing';
    case COMPLETE = 'complete';
    case CANCELLED = 'cancelled';
    case FAILED = 'failed';
    case REFUNDED = 'refunded';

    public function color(): string
    {
        return match ($this) {
            self::STATUS_PENDING => 'badge-light-warning',
            self::PROCESSING => 'badge-light-primary',
            self::COMPLETE => 'badge-light-success',
            self::CANCELLED, self::FAILED => 'badge-light-danger',
            self::REFUNDED => 'badge-light-info',
        };
    }

    public function name(): string
    {
        return match ($this) {
            self::STATUS_PENDING => __('Chờ xử lý'),
            self::PROCESSING => __('Đang xử lý'),
            self::COMPLETE => __('Hoàn thành'),
            self::CANCELLED => __('Đã huỷ'),
            self::FAILED => __('Thất bại'),
            self::REFUNDED => __('Hoàn tền'),
        };
    }


    public function getLabel(): ?string
    {
        return $this->name();
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::STATUS_PENDING => 'warning',
            self::PROCESSING => 'warning',
            self::COMPLETE => 'success',
            self::CANCELLED => 'danger',
            self::FAILED => 'danger',
            self::REFUNDED => 'success',
        };
    }
}
