<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use App\Models\Service as ServiceModel;

class Service extends Component
{
    public OrderForm $orderForm;
    public ServiceModel $service;


    public function mount($slug)
    {
        $this->service = ServiceModel::whereSlug($slug)->whereNotNull('parent_id')->whereStatus('active')->firstOrFail();
        $this->orderForm->setService($this->service);
    }
    public function render()
    {
        return view('livewire.service');
    }

    public function store()
    {
        $this->orderForm->store();
    }
}
