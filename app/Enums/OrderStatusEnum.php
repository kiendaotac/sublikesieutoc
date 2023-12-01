<?php

namespace App\Enums;

enum OrderStatusEnum: string
{
    case STATUS_PENDING = 'pending';
    case UNPAID = 'unpaid';
    case PROCESSING = 'processing';
    case PAID = 'paid';
    case PART_PAID = 'part_paid';
    case CANCELLED = 'cancelled';
    case FAILED = 'failed';
    case REFUNDED = 'refunded';

    public function color(): string
    {
        return match ($this) {
            self::STATUS_PENDING => 'badge-light-warning',
            self::PROCESSING => 'badge-light-primary',
            self::PAID, self::PART_PAID => 'badge-light-success',
            self::CANCELLED, self::UNPAID, self::FAILED => 'badge-light-danger',
            self::REFUNDED => 'badge-light-info',
        };
    }

    public function name(): string
    {
        return match ($this) {
            self::STATUS_PENDING => __('Chờ thanh toán'),
            self::PROCESSING => __('Đang xử lý'),
            self::PAID => __('Đã thanh toán'),
            self::PART_PAID => __('Thanh toán một phần'),
            self::CANCELLED => __('Đã huỷ'),
            self::UNPAID => __('Chưa thanh toán'),
            self::FAILED => __('Thất bại'),
            self::REFUNDED => __('Hoàn tền'),
        };
    }


}
