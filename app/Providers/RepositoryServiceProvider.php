<?php

namespace App\Providers;

use App\Repositories\Cache\VietQrRepositoryCacheDecorator;
use App\Repositories\Contracts\BalanceHistoryInterface;
use App\Repositories\Contracts\BankAccountInterface;
use App\Repositories\Contracts\OrderInterface;
use App\Repositories\Contracts\UserInterface;
use App\Repositories\Contracts\VietQrInterface;
use App\Repositories\Contracts\VoucherInterface;
use App\Repositories\Eloquent\BalanceHistoryRepository;
use App\Repositories\Eloquent\BankAccountRepository;
use App\Repositories\Eloquent\OrderRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Eloquent\VietQrRepository;
use App\Repositories\Eloquent\VoucherRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(OrderInterface::class, OrderRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(VietQrInterface::class, VietQrRepositoryCacheDecorator::class);
        $this->app->bind(BankAccountInterface::class, BankAccountRepository::class);
        $this->app->bind(BalanceHistoryInterface::class, BalanceHistoryRepository::class);
        $this->app->bind(VoucherInterface::class, VoucherRepository::class);
    }

    public function boot(): void
    {
    }
}
