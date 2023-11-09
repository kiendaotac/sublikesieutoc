<?php

namespace App\Livewire;

use App\Services\BankAccountService;
use App\Services\VietQrService;
use Livewire\Component;

class HomePage extends Component
{
    public $services;

    public function mount()
    {
        $this->getData();
    }
    public function render()
    {
        return view('livewire.home-page')->layout('components.layouts.home-page');
    }

    public function getData()
    {
        $this->getService();
    }

    private function getService()
    {
        $this->services = \App\Models\Service::whereStatus('active')->with('parent')->whereNotNull('parent_id')->get();
    }
}
