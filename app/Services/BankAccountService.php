<?php

namespace App\Services;

use App\Repositories\Contracts\BankAccountInterface;

class BankAccountService
{
    private BankAccountInterface $bankAccount;

    public function __construct(BankAccountInterface $bankAccount)
    {
        $this->bankAccount = $bankAccount;
    }

    public function all()
    {
        return $this->bankAccount->all();
    }
}