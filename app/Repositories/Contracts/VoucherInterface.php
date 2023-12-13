<?php

namespace App\Repositories\Contracts;

interface VoucherInterface
{
    public function getAvailableVoucher($user, int $amount);
}