<?php

namespace App\Filament\Resources\BalanceHistoryResource\Pages;

use App\Filament\Resources\BalanceHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBalanceHistory extends EditRecord
{
    protected static string $resource = BalanceHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
