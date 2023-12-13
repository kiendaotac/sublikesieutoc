<?php

namespace App\Filament\Resources\VoucherRuleResource\Pages;

use App\Filament\Resources\VoucherRuleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVoucherRules extends ListRecords
{
    protected static string $resource = VoucherRuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
