<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public User $user;

    public function mount()
    {
        $this->user = auth()->user()->load([
            'orders' => function($q) {
                            $q->with('service');
                        },
            'balanceHistories'
        ]);
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
