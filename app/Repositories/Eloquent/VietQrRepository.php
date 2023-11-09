<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\VietQrInterface;
use Illuminate\Support\Facades\Http;

class VietQrRepository implements VietQrInterface
{
    public function getListBank()
    {
        $response = Http::get('https://api.vietqr.io/v2/banks')->json();
        if (isset($response['code']) and $response['code'] === '00') {
            return $response['data'] ?? [];
        }

        return [];
    }
}