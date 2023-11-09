<?php

namespace App\Repositories\Eloquent;

use App\Models\BankAccount;
use App\Repositories\Contracts\BankAccountInterface;

class BankAccountRepository implements BankAccountInterface
{

    public function all()
    {
        return BankAccount::whereStatus('active')->get();
    }
}