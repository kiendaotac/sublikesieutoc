<?php

namespace App\Livewire\Profile;

use App\Enums\TransactionTypeEnum;
use Livewire\Component;

class Balance extends Component
{
    public function render()
    {
        $deposits = \App\Models\BalanceHistory::whereUserId(auth()->id())->whereType(TransactionTypeEnum::DEPOSIT->value)->latest()->paginate();

        return view('livewire.profile.balance', compact('deposits'));
    }
}
