<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->label('Tên sản phẩm'),
                Forms\Components\Select::make('service_id')
                    ->label('Tên service')
                    ->required()
                    ->options(function () {
                        return Service::whereStatus('active')->whereNotNull('parent_id')->pluck('name', 'id');
                    }),
                Forms\Components\TextInput::make('price')->required()->label('Giá')->numeric()->inputMode('decimal'),
                Forms\Components\TextInput::make('min_target')->nullable()->label('Số luượng tối thiểu')->numeric(),
                Forms\Components\Textarea::make('description')->label('Mô tả')->columnSpanFull()->rows(5),
                Forms\Components\Textarea::make('note')->label('Ghi chú')->columnSpanFull()->rows(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('service.name')->label('Tên dịch vụ'),
                Tables\Columns\TextColumn::make('name')->label('Tên sản phẩm'),
                Tables\Columns\TextColumn::make('price')->label('Giá')->numeric(),
                Tables\Columns\TextColumn::make('min_target')->label('SL tối thiệu')->numeric(),
                Tables\Columns\TextColumn::make('description')->label('Mô tả'),
                Tables\Columns\TextColumn::make('note')->label('Ghi chú'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }    
}
