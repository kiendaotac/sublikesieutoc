<?php

namespace App\Services;

use App\Enums\DiscountTypeEnum;
use App\Repositories\Contracts\VoucherInterface;

class VoucherService
{

    private VoucherInterface $voucherRepository;

    public function __construct(VoucherInterface $voucherRepository)
    {
        $this->voucherRepository = $voucherRepository;
    }

    public function calculateDiscountAmount($user, int $amount)
    {
        $voucher = $this->getAvailableVoucher($user, $amount);
        if (!$voucher) {
            return 0;
        }
        if ($voucher->discount_type == DiscountTypeEnum::PERCENT->value) {
            $discountAmount = ceil($amount * $voucher->discount / 100);
            return max(min($voucher->max_amount, $discountAmount), 0);
        }

        return max(min($voucher->max_amount, $voucher->discount), 0);
    }

    public function getAvailableVoucher($user, int $amount)
    {
        return $this->voucherRepository->getAvailableVoucher($user, $amount);
    }
}