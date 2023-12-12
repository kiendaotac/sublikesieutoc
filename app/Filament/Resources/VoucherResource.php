<?php

namespace App\Filament\Resources;

use App\Enums\CommonStatusEnum;
use App\Enums\DiscountTypeEnum;
use App\Filament\Resources\VoucherResource\Pages;
use App\Filament\Resources\VoucherResource\RelationManagers;
use App\Models\Voucher;
use App\Models\VoucherRule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VoucherResource extends Resource
{
    protected static ?string $model = Voucher::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('voucher_rule_id')
                    ->required()
                    ->label('Chọn rule')
                    ->options(fn() => VoucherRule::whereStatus(CommonStatusEnum::ACTIVE)->pluck('name', 'id')),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Tên Voucher'),
                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull()
                    ->label('Mô tả'),
                Forms\Components\Select::make('discount_type')
                    ->options(DiscountTypeEnum::class)
                    ->selectablePlaceholder(false)
                    ->required()
                    ->default(DiscountTypeEnum::PERCENT->value)
                    ->live()
                    ->label('Chọn loại khuyến mại'),
                Forms\Components\TextInput::make('discount')
                    ->label('Giá trị khuyến mại')
                    ->required()
                    ->numeric()
                    ->inputMode(fn($get, $set) => $get('discount_type') === DiscountTypeEnum::PERCENT->value ? 'decimal' : 'numeric')
                    ->suffix(fn($get, $set) => $get('discount_type') === DiscountTypeEnum::PERCENT->value ? '%' : 'đ')
                    ->minValue(0)
                    ->maxValue(fn($get) => $get('discount_type') == DiscountTypeEnum::PERCENT->value ? 100 : false),
                Forms\Components\TextInput::make('max_amount')
                    ->numeric()
                    ->label('Giá trị khuyến mại tối đa')
                    ->minValue(0),
                Forms\Components\Select::make('status')
                    ->label('Trạng thái')
                    ->required()
                    ->selectablePlaceholder(false)
                    ->default(CommonStatusEnum::ACTIVE->value)
                    ->options(CommonStatusEnum::class),
                Forms\Components\DateTimePicker::make('start_time')
                    ->label('Thời gian bắt đầu')
                    ->minDate(now())
                    ->lte('end_time'),
                Forms\Components\DateTimePicker::make('end_time')
                    ->label('Thời gian kết thúc')
                    ->minDate(now())
                    ->gte('start_time')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rule.name')
                    ->label('Tên rule'),
                Tables\Columns\TextColumn::make('description')
                    ->html()
                    ->label('Mô tả'),
                Tables\Columns\TextColumn::make('discount_type')
                    ->label('Loại khuyến mại'),
                Tables\Columns\TextColumn::make('discount')
                    ->label('Giá trị KM')
                    ->suffix(fn($record) => $record->discount_type == DiscountTypeEnum::PERCENT ? '%' : ' ₫'),
//                    ->money(fn($record) => $record->discount_type == DiscountTypeEnum::AMOUNT->value ? 'VND' : false)
                Tables\Columns\TextColumn::make('max_amount')
                    ->label('Giá trị KM tối đa')
                    ->money('VND'),
                Tables\Columns\TextColumn::make('start_time')
                    ->label('Thời gian bắt đầu')
                    ->dateTime('d/m/y H:i:s'),
                Tables\Columns\TextColumn::make('end_time')
                    ->label('Thời gian bắt đầu')
                    ->dateTime('d/m/y H:i:s'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
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
            RelationManagers\UsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVouchers::route('/'),
            'create' => Pages\CreateVoucher::route('/create'),
            'view' => Pages\ViewVoucher::route('/{record}'),
            'edit' => Pages\EditVoucher::route('/{record}/edit'),
        ];
    }
}
