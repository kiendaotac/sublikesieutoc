<?php

namespace App\Repositories\Cache;

use App\Repositories\Contracts\VietQrInterface;
use App\Repositories\Eloquent\VietQrRepository;
use Illuminate\Support\Facades\Cache;

class VietQrRepositoryCacheDecorator implements VietQrInterface
{
    private const CACHE_PRE_FIX = 'VietQr';

    private VietQrRepository $vietQrRepository;

    public function __construct(VietQrRepository $vietQrRepository)
    {
        $this->vietQrRepository = $vietQrRepository;
    }

    public function getListBank()
    {
        $key = self::CACHE_PRE_FIX . '-ListBank';
        if (Cache::has($key)) {
            return \Cache::get($key, []);
        }

        $banks = $this->vietQrRepository->getListBank();
        if (!empty($banks)) {
            Cache::put($key, $banks, now()->endOfDay());
        }

        return $banks;
    }
}