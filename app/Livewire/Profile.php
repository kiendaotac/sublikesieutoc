<?php

namespace App\Livewire;

use App\Models\User;
use App\Services\BankAccountService;
use Illuminate\Support\Collection;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    public $banks;

    public function mount()
    {
        $this->banks = app(BankAccountService::class)->all();
        $this->user = auth()->user()->load('orders', 'balanceHistories');
    }
    public function render()
    {
        return view('livewire.profile');
    }
}
