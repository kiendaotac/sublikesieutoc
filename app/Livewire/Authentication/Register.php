<?php

namespace App\Livewire\Authentication;

use App\Livewire\Forms\RegisterForm;
use Livewire\Component;

class Register extends Component
{
    public RegisterForm $form;

    public function render()
    {
        return view('livewire.authentication.register')->layout('components.layouts.authentication');
    }

    public function register()
    {
        $this->form->register();
    }
}
