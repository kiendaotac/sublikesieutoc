<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BalanceHistoryResource\Pages;
use App\Filament\Resources\BalanceHistoryResource\RelationManagers;
use App\Models\BalanceHistory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BalanceHistoryResource extends Resource
{
    protected static ?string $model = BalanceHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('User'),
                Tables\Columns\TextColumn::make('old_balance')->label('Số dư cũ')->numeric(),
                Tables\Columns\TextColumn::make('amount')->label('Giá trị')->numeric(),
                Tables\Columns\TextColumn::make('balance')->label('Số dư mới')->numeric(),
                Tables\Columns\TextColumn::make('type')->label('Loại giao dịch'),
                Tables\Columns\TextColumn::make('reason')->label('Lý do'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBalanceHistories::route('/'),
            'create' => Pages\CreateBalanceHistory::route('/create'),
            'view' => Pages\ViewBalanceHistory::route('/{record}'),
            'edit' => Pages\EditBalanceHistory::route('/{record}/edit'),
        ];
    }    
}
