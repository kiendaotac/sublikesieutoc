<?php

namespace App\Repositories\Eloquent;

use App\Models\BalanceHistory;
use App\Repositories\Contracts\BalanceHistoryInterface;

class BalanceHistoryRepository implements BalanceHistoryInterface
{

    public function create(array $data)
    {
        return BalanceHistory::create($data);
    }
}