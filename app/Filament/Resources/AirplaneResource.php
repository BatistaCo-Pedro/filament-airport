<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirplaneResource\Pages;
use App\Filament\Resources\AirplaneResource\RelationManagers;
use App\Models\Airplane;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirplaneResource extends Resource
{
    protected static ?string $model = Airplane::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("typ")->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("typ"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAirplanes::route('/'),
            'create' => Pages\CreateAirplane::route('/create'),
            'edit' => Pages\EditAirplane::route('/{record}/edit'),
        ];
    }    
}
