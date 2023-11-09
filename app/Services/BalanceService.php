<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BalanceService
{
    const LOG_PREFIX = 'BALANCE_SERVICE: ';
    private BalanceHistoryService $balanceHistoryService;

    private UserService $userService;

    public function __construct(BalanceHistoryService $balanceHistoryService, UserService $userService)
    {
        $this->balanceHistoryService = $balanceHistoryService;
        $this->userService           = $userService;
    }

    /**
     * @throws \Throwable
     */
    public function deposit(int $userId, int $amount, ?string $reason): void
    {
        DB::beginTransaction();
        try {
            # get user
            $user = $this->userService->findById($userId);
            # add log history
            $this->balanceHistoryService->addDepositLog($user, $amount, $reason);
            # deposit
            $this->userService->deposit($userId, $amount);
            # add log activities
            # làm sau
            DB::commit();
        } catch (\Exception $exception) {
            Log::debug(self::LOG_PREFIX . 'DEPOSIT EXCEPTION: ' . $exception->getMessage());
            DB::rollBack();
        }
    }

    public function withdraw()
    {
        
    }

    public function refund()
    {
        
    }

    /**
     * @throws \Throwable
     */
    public function purchase(int $userId, int $amount, ?string $reason): bool
    {
        DB::beginTransaction();
        try {
            # get user
            $user = $this->userService->findById($userId);
            # add log history
            $this->balanceHistoryService->addPurchaseLog($user, $amount, $reason);
            # deposit
            $this->userService->subtractBalance($userId, $amount);
            # add log activities
            # làm sau
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            Log::debug(self::LOG_PREFIX . 'PURCHASE EXCEPTION: ' . $exception->getMessage());
            DB::rollBack();
            return false;
        }
    }
}