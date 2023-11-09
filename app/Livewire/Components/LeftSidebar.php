<?php

namespace App\Livewire\Components;

use App\Models\Service;
use Illuminate\Support\Collection;
use Livewire\Component;

class LeftSidebar extends Component
{
    public Collection $services;

    public function mount()
    {
        $this->services = Service::whereNull('parent_id')->where('status', 'active')->with('children')->get();
    }
    public function render()
    {
        return view('livewire.components.left-sidebar');
    }
}
