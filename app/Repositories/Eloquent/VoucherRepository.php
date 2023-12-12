<?php

namespace App\Repositories\Eloquent;

use App\Enums\CommonStatusEnum;
use App\Models\Voucher;
use App\Repositories\Contracts\VoucherInterface;
use Illuminate\Database\Eloquent\Builder;

class VoucherRepository implements VoucherInterface
{
    public function getAvailableVoucher($user, int $amount)
    {
        $vouchers = Voucher::query()
            ->with(['rule', 'users'])
            ->whereHas('rule', function ($query) use ($amount) {
                $query->whereStatus(CommonStatusEnum::ACTIVE->value)
                    ->where(function (Builder $query) use ($amount) {
                        $query->where('min_amount', '<=', $amount)->orWhereNull('min_amount');
                    })
                    ->where(function (Builder $query) use ($amount) {
                        $query->where('max_amount', '>=', $amount)->orWhereNull('max_amount');
                    });
            })
            ->whereDate('start_time', '<=', now())
            ->whereDate('end_time', '>=', now())
            ->get();
        foreach ($vouchers as $voucher) {
            if (!$voucher->users) {
                return $voucher;
            }
            if ($voucher->users->where('id', $user->id)) {
                return $voucher;
            }
        }

        return null;
    }
}