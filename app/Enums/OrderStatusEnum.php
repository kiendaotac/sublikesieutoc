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
}
