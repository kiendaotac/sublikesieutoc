<?php

namespace App\Filament\Resources\VoucherTransactionResource\Pages;

use App\Filament\Resources\VoucherTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVoucherTransaction extends ViewRecord
{
    protected static string $resource = VoucherTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
