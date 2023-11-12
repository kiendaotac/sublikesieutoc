<?php

namespace App\Filament\Resources;

use App\Services\BalanceService;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use STS\FilamentImpersonate\Tables\Actions\Impersonate;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?int $navigationSort = 9;

    protected static ?string $navigationIcon = 'heroicon-o-lock-closed';

    public static function getNavigationLabel(): string
    {
        return trans('filament-user::user.resource.label');
    }

    public static function getPluralLabel(): string
    {
        return trans('filament-user::user.resource.label');
    }

    public static function getLabel(): string
    {
        return trans('filament-user::user.resource.single');
    }

    public static function getNavigationGroup(): ?string
    {
        return config('filament-user.group');
    }

    public function getTitle(): string
    {
        return trans('filament-user::user.resource.title.resource');
    }

    public static function form(Form $form): Form
    {
        $rows = [
            TextInput::make('name')
                ->required()
                ->label(trans('filament-user::user.resource.name')),
            TextInput::make('username')
                ->disabled(function () use($form) {
                    return $form->getOperation() == 'edit';
                })
                ->required()
                ->unique('users', 'username')
                ->label('Username'),
            TextInput::make('email')
                ->email()
                ->required()
                ->label(trans('filament-user::user.resource.email')),
            TextInput::make('phone')
                ->required()
                ->label('Số điện thoại'),
            TextInput::make('password')
                ->label(trans('filament-user::user.resource.password'))
                ->password()
                ->maxLength(255)
                ->dehydrateStateUsing(static function ($state) use ($form) {
                    return !empty($state)
                            ? Hash::make($state)
                            : User::find($form->getColumns())?->password;
                }),
        ];

        if (config('filament-user.shield')) {
            $rows[] = Forms\Components\Select::make('roles')
                ->multiple()
                ->preload()
                ->relationship('roles', 'name')
                ->label(trans('filament-user::user.resource.roles'));
        }
        $rows[] = TextInput::make('balance')
            ->disabled()
            ->label('Số dư')
            ->disabled()
            ->hidden(function () use ($form) {
                return $form->getOperation() == 'create';
            });
        $rows[] = Forms\Components\Select::make('status')
            ->label('Trạng thái')
            ->required()
            ->options([
                'active' => 'Kích hoạt',
                'inactive' => 'Không kích hoạt'
            ])
            ->default('active');

        $form->schema($rows);

        return $form;
    }

    public static function table(Table $table): Table
    {
        !config('filament-user.impersonate') ?: $table->actions([Impersonate::make('impersonate')]);
        $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->label(trans('filament-user::user.resource.id')),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label(trans('filament-user::user.resource.name')),
                TextColumn::make('username')
                    ->sortable()
                    ->searchable()
                    ->label('Username'),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable()
                    ->label(trans('filament-user::user.resource.email')),
                TextColumn::make('phone')
                    ->sortable()
                    ->searchable()
                    ->label('Số điện thoại'),
                TextColumn::make('balance')
                    ->sortable()
                    ->searchable()
                    ->numeric()
                    ->label('Số dư'),
                TextColumn::make('status')
                    ->sortable()
                    ->searchable()
                    ->label('Trạng thái'),
                TextColumn::make('created_at')
                    ->label(trans('filament-user::user.resource.created_at'))
                    ->dateTime('d/m/Y')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label(trans('filament-user::user.resource.updated_at'))
                    ->dateTime('d/m/Y')
                    ->sortable(),
            ])
            ->filters([
//                Tables\Filters\Filter::make('verified')
//                    ->label(trans('filament-user::user.resource.verified'))
//                    ->query(fn(Builder $query): Builder => $query->whereNotNull('email_verified_at')),
//                Tables\Filters\Filter::make('unverified')
//                    ->label(trans('filament-user::user.resource.unverified'))
//                    ->query(fn(Builder $query): Builder => $query->whereNull('email_verified_at')),
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                    Tables\Actions\Action::make('deposit')
                        ->label('Nạp tiền')
                        ->icon('heroicon-s-document-plus')
                        ->form([
                            TextInput::make('balance')
                                ->label('Số tiền cần nạp')
                                ->numeric()
                                ->required()
                                ->minValue(1000)
                                ->default(1000)
                        ])
                        ->requiresConfirmation()
                        ->action(function (array $data, User $record) {
                            $balanceService = app(BalanceService::class);
                            $reason = "Nạp tiền bởi admin: " . auth()->user()->name;
                            $balanceService->deposit($record->id, $data['balance'], $reason);
                        })
                ]),
            ]);
        return $table;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
