<?php

namespace App\Livewire;

use App\Services\BankAccountService;
use Livewire\Component;

class Payment extends Component
{
    public $banks;

    public $user;

    public function mount()
    {
        $this->banks = app(BankAccountService::class)->all();
        $this->user = auth()->user();
    }
    public function render()
    {
        return view('livewire.payment');
    }
}
