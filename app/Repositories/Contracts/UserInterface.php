<?php

namespace App\Repositories\Contracts;

interface UserInterface
{
    public function subtractBalance(int $userId, int $amount): bool;

    public function findById(int $userId);

    public function deposit(int $userId, int $amount): bool;
}