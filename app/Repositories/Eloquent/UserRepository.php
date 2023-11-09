<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserRepository implements UserInterface
{
    public function subtractBalance(int $userId, int $amount): bool
    {
        $user = User::whereId($userId)->lockForUpdate()->first();
        if ($user && $user->balance >= $amount) {
            return !!$user->update(['balance' => $user->balance - $amount]);
        }

        return false;
    }

    public function findById(int $userId): Model|Collection|array|User
    {
        return User::findOrFail($userId);
    }

    public function deposit(int $userId, int $amount): bool
    {
        $user = User::whereId($userId)->lockForUpdate()->first();
        if ($user) {
            return !!$user->update(['balance' => $user->balance + $amount]);
        }

        return false;
    }
}