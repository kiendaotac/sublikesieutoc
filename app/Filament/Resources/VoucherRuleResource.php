<?php

namespace App\Filament\Resources;

use App\Enums\CommonStatusEnum;
use App\Filament\Resources\VoucherRuleResource\Pages;
use App\Filament\Resources\VoucherRuleResource\RelationManagers;
use App\Models\VoucherRule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VoucherRuleResource extends Resource
{
    protected static ?string $model = VoucherRule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Tên Voucher Rule')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull()
                    ->label('Mô tả')
                    ->rows(5)
                    ->maxLength(255),
                Forms\Components\TextInput::make('min_amount')
                    ->label('Giá trị tối thiểu')
                    ->numeric(),
                Forms\Components\TextInput::make('max_amount')
                    ->label('Giá trị tối đa')
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options(CommonStatusEnum::class)
                    ->default(CommonStatusEnum::ACTIVE),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('min_amount')
                    ->money('VND')
                    ->sortable(),
                Tables\Columns\TextColumn::make('max_amount')
                    ->money('VND')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
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
            'index' => Pages\ListVoucherRules::route('/'),
            'create' => Pages\CreateVoucherRule::route('/create'),
            'view' => Pages\ViewVoucherRule::route('/{record}'),
            'edit' => Pages\EditVoucherRule::route('/{record}/edit'),
        ];
    }
}
