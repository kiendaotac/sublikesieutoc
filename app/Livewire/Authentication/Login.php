<?php

namespace App\Livewire\Authentication;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function render()
    {
        return view('livewire.authentication.login')->layout('components.layouts.authentication');
    }

    public function signIn()
    {
        $this->form->signIn();
        $this->redirect(route('dashboard'));
    }
}
