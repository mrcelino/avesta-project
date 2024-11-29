<?php

namespace App\Filament\Resources;
use App\Filament\Widgets\BarChart;
use App\Filament\Resources\DataResource\Pages;
use App\Filament\Resources\DataResource\RelationManagers;
use App\Models\Unggas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataResource extends Resource
{
    protected static ?string $model = Unggas::class;
    protected static ?string $title = 'Data';
    protected ?string $heading = 'Data';
    protected static ?string $navigationLabel = 'Data';
    protected static ?string $navigationIcon = 'heroicon-s-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             //
    //         ])
    //         ->filters([
    //             //
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\BulkActionGroup::make([
    //                 Tables\Actions\DeleteBulkAction::make(),
    //             ]), 
    //         ])
            
    //         ;
    // }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public function getColumns(): int | string | array
{
    return 2;
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListData::route('/'),
            'create' => Pages\CreateData::route('/create'),
            'edit' => Pages\EditData::route('/{record}/edit'),
        ];
    }
    public static function getWidgets(): array
    {
    return [
        DataResource\Widgets\BarChart::class,
    ];
    }
}