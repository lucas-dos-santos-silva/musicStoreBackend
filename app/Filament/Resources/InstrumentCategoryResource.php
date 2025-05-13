<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstrumentCategoryResource\Pages;
use App\Filament\Resources\InstrumentCategoryResource\RelationManagers;
use App\Models\InstrumentCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InstrumentCategoryResource extends Resource
{
    protected static ?string $model = InstrumentCategory::class;

    public static function getModelLabel(): string
    {
        return __('Instrument Category');
    }
    public static function getPluralModelLabel(): string
    {
        return __('Instrument Categories');
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)->label('Nome'),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255)->label('Descrição'),
                Forms\Components\Toggle::make('active')
                    ->required()
                    ->default(true)
                    ->inline(false)
                    ->label('Ativo'),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Descrição'),
                Tables\Columns\ToggleColumn::make('active')
                    ->label('Ativo')->sortable(),
            ])->filters([
                //
            ])
            ->filters([
                //
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
            'index' => Pages\ListInstrumentCategories::route('/'),
            'create' => Pages\CreateInstrumentCategory::route('/create'),
            'edit' => Pages\EditInstrumentCategory::route('/{record}/edit'),
        ];
    }
}
