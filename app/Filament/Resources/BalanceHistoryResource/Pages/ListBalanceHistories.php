<?php

namespace App\Filament\Resources\BalanceHistoryResource\Pages;

use App\Filament\Resources\BalanceHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBalanceHistories extends ListRecords
{
    protected static string $resource = BalanceHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
