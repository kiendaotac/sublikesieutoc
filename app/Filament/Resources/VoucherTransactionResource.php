<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VoucherTransactionResource\Pages;
use App\Filament\Resources\VoucherTransactionResource\RelationManagers;
use App\Models\VoucherTransaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VoucherTransactionResource extends Resource
{
    protected static ?string $model = VoucherTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canView(Model $record): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('transaction_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('voucher_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('order_amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('discount_amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255)
                    ->default('used'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('transaction_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('voucher_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\ViewAction::make(),
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
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
            'index' => Pages\ListVoucherTransactions::route('/'),
            'create' => Pages\CreateVoucherTransaction::route('/create'),
            'view' => Pages\ViewVoucherTransaction::route('/{record}'),
            'edit' => Pages\EditVoucherTransaction::route('/{record}/edit'),
        ];
    }
}
