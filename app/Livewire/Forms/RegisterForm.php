<?php

namespace App\Livewire\Forms;

use App\Models\User;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Illuminate\Auth\Events\Registered;
use Livewire\Attributes\Rule;
use Livewire\Form;

class RegisterForm extends Form
{
    use InteractsWithFormActions;
    use WithRateLimiting;

    #[Rule(['required', 'email', 'unique:users,email'])]
    public string $email;
    #[Rule(['required', 'string', 'alpha_dash', 'min:6', 'unique:users,username'])]
    public string $username;
    #[Rule(['required', 'string', 'min:8', 'confirmed'])]
    public string $password;
    #[Rule(['required', 'string', 'min:8'])]
    public string $password_confirmation;
    #[Rule(['required', 'bool', 'in:1'])]
    public string $accept;

    public function register()
    {
        $this->validate();
        try {
            $this->rateLimit(2);
        } catch (TooManyRequestsException $exception) {
            Notification::make()
                ->title(__('filament-panels::pages/auth/register.notifications.throttled.title', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]))
                ->body(array_key_exists('body', __('filament-panels::pages/auth/register.notifications.throttled') ?: []) ? __('filament-panels::pages/auth/register.notifications.throttled.body', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]) : null)
                ->danger()
                ->send();

            return null;
        }

        $data = $this->only(['email', 'username', 'password']);
        $data['name'] = $data['username'];

        $user = User::create($data);

//        app()->bind(
//            \Illuminate\Auth\Listeners\SendEmailVerificationNotification::class,
//            \Filament\Listeners\Auth\SendEmailVerificationNotification::class,
//        );
        event(new Registered($user));

        Filament::auth()->login($user);

        session()->regenerate();

        return redirect(route('dashboard'));
    }
}
