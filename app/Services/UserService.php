<?php

namespace App\Services;

use App\Repositories\Contracts\UserInterface;

class UserService
{
    private UserInterface $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function subtractBalance(int $userId, int $amount): bool
    {
        return $this->userRepository->subtractBalance($userId, $amount);
    }

    public function findById(int $userId)
    {
        return $this->userRepository->findById($userId);
    }

    public function deposit(int $userId, int $amount): bool
    {
        return $this->userRepository->deposit($userId, $amount);
    }
}