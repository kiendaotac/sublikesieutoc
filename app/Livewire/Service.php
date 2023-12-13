<?php

namespace App\Livewire;

use App\Livewire\Forms\OrderForm;
use App\Models\Product;
use Livewire\Component;
use App\Models\Service as ServiceModel;

class Service extends Component
{
    public OrderForm $orderForm;
    public $service;
    public $productPrice;
    public $selectedProduct;


    public function mount($slug)
    {
        $this->service = ServiceModel::whereSlug($slug)
            ->whereNotNull('parent_id')
            ->whereStatus('active')
            ->with(['products'])
            ->firstOrFail();
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

    public function updatedOrderFormProductId($productId): void
    {
        $this->selectedProduct = Product::findOrFail($productId);
        $this->productPrice = $this->selectedProduct->price;
    }
}
