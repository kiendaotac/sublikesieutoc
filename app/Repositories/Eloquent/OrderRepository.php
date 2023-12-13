<?php

namespace App\Repositories\Eloquent;

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use App\Repositories\Contracts\OrderInterface;

class OrderRepository implements OrderInterface
{

    public function store($data)
    {
        return Order::create($data);
    }

    public function update($data, $id): bool
    {
        return !!Order::whereId($id)->update($data);
    }

    public function confirmPaid($orderId): bool
    {
        return !!Order::whereId($orderId)->update(['status' => OrderStatusEnum::STATUS_PENDING->value]);
    }
}