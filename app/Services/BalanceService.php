<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Number;

class BalanceService
{
    const LOG_PREFIX = 'BALANCE_SERVICE: ';
    private BalanceHistoryService $balanceHistoryService;

    private UserService $userService;

    private VoucherService $voucherService;

    public function __construct(BalanceHistoryService $balanceHistoryService, UserService $userService, VoucherService $voucherService)
    {
        $this->balanceHistoryService = $balanceHistoryService;
        $this->userService           = $userService;
        $this->voucherService        = $voucherService;
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
            # calculate discount
            $discountAmount = $this->voucherService->calculateDiscountAmount($user, $amount);
            if ($discountAmount) {
                $amount += $discountAmount;
                $discountAmountFormat = Number::currency($discountAmount, 'VND');
                $reason .= "\n-Được khuyến mại: ${discountAmountFormat}";
            }
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