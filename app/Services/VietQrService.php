<?php

namespace App\Services;

use App\Repositories\Contracts\VietQrInterface;

class VietQrService
{
    private VietQrInterface $vietQr;

    public function __construct(VietQrInterface $vietQr)
    {
        $this->vietQr = $vietQr;
    }

    public function getListBank()
    {
        return $this->vietQr->getListBank();
    }
}