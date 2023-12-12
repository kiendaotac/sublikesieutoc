<?php

namespace App\Filament\Resources\VoucherRuleResource\Pages;

use App\Filament\Resources\VoucherRuleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoucherRule extends EditRecord
{
    protected static string $resource = VoucherRuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
