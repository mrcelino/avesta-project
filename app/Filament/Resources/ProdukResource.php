<?php

namespace App\Filament\Resources;
use Illuminate\Support\Facades\Storage; // Tambahkan ini
use App\Filament\Resources\ProdukResource\Pages;
use App\Filament\Resources\ProdukResource\RelationManagers;
use App\Models\Unggas;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdukResource extends Resource
{
    protected static ?string $navigationLabel = 'Produk';
    protected static ?string $model = Unggas::class;

    protected static ?string $navigationIcon = 'heroicon-s-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto_unggas')
                ->label('Foto')
                ->image() 
                ->maxSize(2048) 
                ->directory('uploads/fotos') 
                ->required(), 
                
                TextInput::make('jenis_unggas')
                ->label('Nama')
                ->required(),
                Forms\Components\TextInput::make('harga_per_kg')
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
            ImageColumn::make('foto_unggas')
            ->size(100)
            ->label('Foto')
            ->url(fn ($record) => Storage::url($record->foto_produk)), // menggunakan Storage::url
            Tables\Columns\TextColumn::make('jenis_unggas')->label('Nama'),
            Tables\Columns\TextColumn::make('harga_per_kg')
            ->label('Harga')
            ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),
            Tables\Columns\TextColumn::make('stok')->label('Stok'),
            Tables\Columns\TextColumn::make('penjualan')->label('Penjualan'),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
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