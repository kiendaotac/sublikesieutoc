<?php

namespace App\Filament\Pages\Authentication;

use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class LoginResponse implements \Filament\Http\Responses\Auth\Contracts\LoginResponse
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        if (Filament::auth()->user()->hasRole('super_admin')) {
            return redirect()->intended(route('filament.admin.pages.dashboard'));
        }
        return redirect()->intended(route('dashboard'));
    }
}