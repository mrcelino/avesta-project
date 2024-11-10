<?php

namespace App\Filament\Resources;
use Illuminate\Support\Facades\Storage; // Tambahkan ini
use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Produk;
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

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto_produk')
                ->label('Foto_Produk')
                ->image() 
                ->maxSize(2048) 
                ->directory('uploads/fotos') 
                ->required(), 
                
                TextInput::make('info_produk')
                ->label('Nama')
                ->required(),
                Forms\Components\TextInput::make('harga')
                    ->label('Harga')
                    ->numeric()
                    ->required(),
                    
                Forms\Components\TextInput::make('stok')
                    ->label('Stok')
                    ->numeric()
                    ->required(),
                    
                Forms\Components\TextInput::make('penjualan')
                    ->label('Penjualan')
                    ->numeric()
                    ->default(0), // Default 0
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('foto_produk')
            ->size(100)
            ->label('Foto Produk')
            ->url(fn ($record) => Storage::url($record->foto_produk)), // menggunakan Storage::url
            Tables\Columns\TextColumn::make('info_produk')->label('Informasi Produk'),
            Tables\Columns\TextColumn::make('harga')->label('Harga'),
            Tables\Columns\TextColumn::make('stok')->label('Stok'),
            Tables\Columns\TextColumn::make('penjualan')->label('Penjualan'),
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}