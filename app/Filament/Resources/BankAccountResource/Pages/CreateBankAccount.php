<?php

namespace App\Filament\Resources\BankAccountResource\Pages;

use App\Filament\Resources\BankAccountResource;
use App\Services\VietQrService;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBankAccount extends CreateRecord
{

    protected static string $resource = BankAccountResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $vietQr = app(VietQrService::class);
        $banks = $vietQr->getListBank();
        $banks = array_values(array_filter($banks, function ($bank) use ($data) {
            return $bank['code'] == $data['bank_code'];
        }));
        if (empty($banks)) {
            abort(404, 'Không tìm thấy ngân hàng');
        }

        $bank = $banks[0];

        return [
            'bank_name'   => $bank['name'],
            'short_name'  => $bank['short_name'],
            'bank_logo'   => $bank['logo'],
            'bank_code'   => $bank['code'],
            'bin'         => $bank['bin'],
            'card_name'   => $data['card_name'],
            'card_number' => $data['card_number'],
            'amount'      => $data['amount'],
            'command'     => $data['command'],
            'template'    => $data['template'],
            'status'      => $data['status'],
        ];
    }
}
