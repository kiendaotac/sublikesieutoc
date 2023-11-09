<?php

namespace App\Filament\Pages\Authentication;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Facades\Filament;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Models\Contracts\FilamentUser;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;

class Login extends \Filament\Pages\Auth\Login
{
    protected static string $layout = 'components.layouts.authentication';
    protected static string $view = 'filament.pages.authentication.login';

    public function authenticate(): ?LoginResponse
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            Notification::make()
                ->title(__('filament-panels::pages/auth/login.notifications.throttled.title', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]))
                ->body(array_key_exists('body', __('filament-panels::pages/auth/login.notifications.throttled') ?: []) ? __('filament-panels::pages/auth/login.notifications.throttled.body', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]) : null)
                ->danger()
                ->send();

            return null;
        }

        $data = $this->form->getState();

        if (! Filament::auth()->attempt($this->getCredentialsFromFormData($data), $data['remember'] ?? false)) {
            $this->throwFailureValidationException();
        }

        $user = Filament::auth()->user();

        if (
            ($user instanceof FilamentUser) &&
            (! $user->canAccessPanel(Filament::getCurrentPanel()))
        ) {
            Filament::auth()->logout();

            $this->throwFailureValidationException();
        }

        session()->regenerate();

        return app(LoginResponse::class);
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->hiddenLabel()
            ->email()
            ->required()
            ->autocomplete()
            ->autofocus()
            ->placeholder(__('filament-panels::pages/auth/login.form.email.label'))
            ->extraAttributes(['class' => 'fv-row mb-8'])
            ->extraInputAttributes(['class' => 'form-control bg-transparent', 'tabindex' => 1]);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->password()
            ->hiddenLabel()
            ->placeholder(__('filament-panels::pages/auth/login.form.password.label'))
            ->hint(filament()->hasPasswordReset() ? new HtmlString(Blade::render('<x-filament::link :href="filament()->getRequestPasswordResetUrl()"> {{ __(\'filament-panels::pages/auth/login.actions.request_password_reset.label\') }}</x-filament::link>')) : null)
            ->password()
            ->autocomplete('current-password')
            ->required()
            ->extraAttributes(['class' => 'fv-row mb-8'])
            ->extraInputAttributes(['class' => 'form-control bg-transparent', 'tabindex' => 2]);
    }

    protected function getRememberFormComponent(): Component
    {
        return Checkbox::make('remember')
            ->hidden()
            ->default(true)
            ->label(__('filament-panels::pages/auth/login.form.remember.label'))
            ->extraInputAttributes(['class' => 'form-check-input']);
    }
}
