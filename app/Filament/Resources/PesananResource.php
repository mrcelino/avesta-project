<?php
namespace App\Filament\Resources;
use Illuminate\Support\Facades\Storage; 
use App\Filament\Resources\PesananResource\Pages;
use App\Filament\Resources\PesananResource\RelationManagers;
use App\Models\Pesanan;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Models\Unggas;
use Filament\Forms; 
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PesananResource extends Resource
{
    protected static ?string $model = Unggas::class;
    protected static ?string $navigationLabel = 'Pesanan';
    protected static ?string $navigationIcon = 'heroicon-s-clipboard-document-list';

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
                ImageColumn::make('foto_unggas')
                ->size(100)
                ->label('Foto')
                ->url(fn ($record) => Storage::url($record->foto_produk)), // menggunakan Storage::url
                Tables\Columns\TextColumn::make('jenis_unggas')->label('Nama'),
                Tables\Columns\TextColumn::make('harga_per_kg')
                ->label('Total Harga')
                ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                Tables\Columns\TextColumn::make('stok')->label('Jumlah Pesanan') ->sortable(),
                ToggleColumn::make('Sudah Dibayar')
                // Tables\Columns\TextColumn::make('penjualan')->label('Penjualan'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListPesanans::route('/'),
            'create' => Pages\CreatePesanan::route('/create'),
            'edit' => Pages\EditPesanan::route('/{record}/edit'),
        ];
    }
}