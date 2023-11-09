<?php

namespace App\Services;

use App\Enums\TransactionTypeEnum;
use App\Exceptions\NotEnoughMoneyException;
use App\Repositories\Contracts\BalanceHistoryInterface;

class BalanceHistoryService
{
    private BalanceHistoryInterface $balanceHistory;

    public function __construct(BalanceHistoryInterface $balanceHistory)
    {
        $this->balanceHistory = $balanceHistory;
    }

    public function addDepositLog($user, int $amount, ?string $reason)
    {
        $data = [
            'user_id'     => $user->id,
            'old_balance' => $user->balance,
            'amount'      => $amount,
            'balance'     => intval($user->balance) + $amount,
            'type'        => TransactionTypeEnum::DEPOSIT->value,
            'reason'      => $reason,
        ];
        return $this->balanceHistory->create($data);
    }

    /**
     * @throws NotEnoughMoneyException
     */
    public function addPurchaseLog($user, int $amount, ?string $reason)
    {
        if ($user->balance < $amount) {
            return throw new NotEnoughMoneyException('Không thể thực hiện giao dịch do không đủ tiền');
        }
        $data = [
            'user_id'     => $user->id,
            'old_balance' => $user->balance,
            'amount'      => $amount,
            'balance'     => intval($user->balance) - $amount,
            'type'        => TransactionTypeEnum::PURCHASE->value,
            'reason'      => $reason,
        ];
        return $this->balanceHistory->create($data);
    }
}