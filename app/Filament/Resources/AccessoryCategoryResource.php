<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccessoryCategoryResource\Pages;
use App\Filament\Resources\AccessoryCategoryResource\RelationManagers;
use App\Models\AccessoryCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccessoryCategoryResource extends Resource
{
    protected static ?string $model = AccessoryCategory::class;

    public static function getModelLabel(): string
    {
        return __('Accessory Category');
    }
    public static function getPluralModelLabel(): string
    {
        return __('Accessory Categories');
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nome'),
                Forms\Components\TextInput::make('description')
                    ->maxLength(65535)
                    ->label('Descrição'),
                Forms\Components\Toggle::make('active')->default(true)->label('Ativo')->inline(false),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Descrição'),
                Tables\Columns\ToggleColumn::make('active')
                    ->label('Ativo')
                    ->sortable()
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListAccessoryCategories::route('/'),
            'create' => Pages\CreateAccessoryCategory::route('/create'),
            'edit' => Pages\EditAccessoryCategory::route('/{record}/edit'),
        ];
    }
}
