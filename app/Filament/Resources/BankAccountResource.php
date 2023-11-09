<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BankAccountResource\Pages;
use App\Filament\Resources\BankAccountResource\RelationManagers;
use App\Models\BankAccount;
use App\Services\VietQrService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BankAccountResource extends Resource
{
    protected static ?string $model = BankAccount::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $vietQr = app(VietQrService::class);
        $banks  = $vietQr->getListBank();
        return $form
            ->schema([
                Forms\Components\Select::make('bank_code')
                    ->label('Chọn ngân hàng')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->allowHtml()
                    ->options(function () use($banks) {
                        $options = [];
                        foreach ($banks as $bank) {
                            $options[$bank['code']] = "{$bank['name']} ({$bank['shortName']})";
                        }
                        return $options;
                    }),
                Forms\Components\TextInput::make('card_name')
                    ->label('Tên chủ tài khoản')
                    ->required(),
                Forms\Components\TextInput::make('card_number')
                    ->label('Số thẻ')
                    ->required()
                    ->minLength(10)
                    ->numeric(),
                Forms\Components\TextInput::make('amount')
                    ->label('Số tiền mặc định')
                    ->default(50000)
                    ->numeric(),
                Forms\Components\TextInput::make('command')
                    ->label('Cú pháp nạp tiền')
                    ->nullable(),
                Forms\Components\TextInput::make('template')
                    ->label('ID template')
                    ->required()
                    ->helperText('Id của mẫu qr tạo trên vietqr.io'),
                Forms\Components\Select::make('status')
                    ->options([
                        'active' => 'Kích hoạt',
                        'inactive' => 'Không kích hoạt'
                    ])
                    ->required()
                    ->default('active')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bank_name'),
                Tables\Columns\TextColumn::make('card_name'),
                Tables\Columns\TextColumn::make('card_number'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListBankAccounts::route('/'),
            'create' => Pages\CreateBankAccount::route('/create'),
            'edit' => Pages\EditBankAccount::route('/{record}/edit'),
        ];
    }

}
