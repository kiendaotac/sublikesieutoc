<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        $orders = \App\Models\Order::whereUserId(auth()->id())->with(['service', 'product'])->latest()->paginate();

        return view('livewire.profile.order', compact('orders'));
    }
}
