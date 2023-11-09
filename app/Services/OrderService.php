<?php

namespace App\Services;

use App\Models\Service;
use App\Repositories\Contracts\OrderInterface;

class OrderService
{

    private OrderInterface $order;

    public function __construct(OrderInterface $order)
    {
        $this->order = $order;
    }

    public function create(array $data)
    {
        return $this->order->store($data);
    }

    public function confirmPaid($orderId)
    {
        return $this->order->confirmPaid($orderId);
    }

    public function calculateAmount(int $target, Service $service): int
    {
        return $target * $service->price;
    }
}