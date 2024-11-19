<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TokoResource\Pages;
use App\Filament\Resources\TokoResource\RelationManagers;
use App\Models\Warung;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TokoResource extends Resource
{
    protected static ?string $model = Warung::class;
    protected static ?string $title = 'Toko';
    protected ?string $heading = 'Toko';
    protected static ?string $navigationLabel = 'Toko';
    protected static ?string $navigationIcon = 'heroicon-s-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                ->label('Nama')
                ->required(),
                TextInput::make('nomor_hp')
                ->label('Nomor HP')
                ->required()
                ->numeric() 
                ->tel()      
                ->minLength(10) 
                ->maxLength(15) 
                ->placeholder('Contoh: 08123456789'),
                Forms\Components\TextInput::make('deskripsi')
                ->label('Deskripsi')
                ->required(),
                Forms\Components\TextInput::make('kecamatan')
                ->label('Kecamatan')
                ->required(),
                Forms\Components\TextInput::make('kelurahan')
                ->label('Kelurahan')
                ->required(),
                Forms\Components\TextInput::make('kota')
                ->label('Kota')
                ->required(),
                Forms\Components\TextInput::make('kode_pos')
                ->label('Kode Pos')
                ->numeric()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_warung')->label('Nama'),
                Tables\Columns\TextColumn::make('alamat_warung')
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
            'index' => Pages\ListTokos::route('/'),
            'create' => Pages\CreateToko::route('/create'),
            'edit' => Pages\EditToko::route('/{record}/edit'),
        ];
    }
}