<?php

namespace App\Filament\Resources\VoucherTransactionResource\Pages;

use App\Filament\Resources\VoucherTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoucherTransaction extends EditRecord
{
    protected static string $resource = VoucherTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
