<?php

namespace App\Repositories\Contracts;

interface OrderInterface
{
    public function store($data);

    public function update($data, $id);

    public function confirmPaid($orderId);

}