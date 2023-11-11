<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

class MakeUserCommand extends \Filament\Commands\MakeUserCommand
{
    protected function getUserData(): array
    {
        return [
            'name' => $this->options['name'] ?? text(
                    label: 'Name',
                    required: true,
                ),

            'username' => $this->options['username'] ?? text(
                    label: 'Username',
                    required: true,
                    validate: fn (string $username): ?string => match (true) {
                        static::getUserModel()::where('username', $username)->exists() => 'A user with this username already exists',
                        default => null,
                    },
                ),

            'email' => $this->options['email'] ?? text(
                    label: 'Email address',
                    required: true,
                    validate: fn (string $email): ?string => match (true) {
                        ! filter_var($email, FILTER_VALIDATE_EMAIL) => 'The email address must be valid.',
                        static::getUserModel()::where('email', $email)->exists() => 'A user with this email address already exists',
                        default => null,
                    },
                ),

            'password' => Hash::make($this->options['password'] ?? password(
                label: 'Password',
                required: true,
            )),
        ];
    }

}
