<?php

namespace App\Filament\Resources;

use App\Enums\OrderStatusEnum;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Carbon;
use Illuminate\Support\Number;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;
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
                Tables\Columns\TextColumn::make('service.name')->label('Dịch vụ'),
                Tables\Columns\TextColumn::make('original')->label('Số lượng ban đầu')->numeric(),
                Tables\Columns\TextColumn::make('target')->label('Số lượng')->numeric(),
                Tables\Columns\TextColumn::make('done')->label('SL hoàn thành')->numeric(),
                Tables\Columns\TextColumn::make('id')->label('% hoàn thành')->formatStateUsing(fn($record) => Number::percentage(intval($record->done)/intval($record->target) * 100)),
                Tables\Columns\TextColumn::make('product.price')->label('Giá')->money('VND'),
                Tables\Columns\TextColumn::make('amount')->label('Tổng tiền')->money('VND'),
                Tables\Columns\TextColumn::make('note')->label('Ghi chú'),
                Tables\Columns\TextColumn::make('finished_at')->label('Ngày hoàn thành')->dateTime('d/m/Y H:i:s'),
                Tables\Columns\TextColumn::make('created_at')->label('Ngày tạo')->dateTime('d/m/Y H:i:s'),
                Tables\Columns\TextColumn::make('status')->label('Trạng thái')->badge(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('service_type')
                    ->options(fn() => Service::whereNotNull('parent_id')->pluck('name', 'type'))
                    ->label('Loại dịch vụ')
                    ->multiple()
                    ->searchable(),
                Tables\Filters\SelectFilter::make('status')
                    ->label('Trạng thái')
                    ->options(OrderStatusEnum::class)
                    ->multiple()
                    ->searchable(),
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')->label('Từ ngày'),
                        Forms\Components\DatePicker::make('created_until')->label('Đến ngày'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'] ?? null,
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'] ?? null,
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];
                        if ($data['created_from'] ?? null) {
                            $indicators['created_from'] = 'Từ ngày ' . Carbon::parse($data['created_from'])->format('d/m/Y');
                        }
                        if ($data['created_until'] ?? null) {
                            $indicators['created_until'] = 'Đến ngày ' . Carbon::parse($data['created_until'])->format('d/m/Y');
                        }

                        return $indicators;
                    }),
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
            ])->defaultSort('created_at', 'DESC');
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
