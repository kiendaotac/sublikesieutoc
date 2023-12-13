<?php

namespace App\Filament\Resources\VoucherTransactionResource\Pages;

use App\Filament\Resources\VoucherTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVoucherTransactions extends ListRecords
{
    protected static string $resource = VoucherTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
