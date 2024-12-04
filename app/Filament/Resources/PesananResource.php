<?php
namespace App\Filament\Resources;
use Illuminate\Support\Facades\Storage; 
use App\Filament\Resources\PesananResource\Pages;
use App\Filament\Resources\PesananResource\RelationManagers;
use App\Models\Pesanan;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Models\Order;
use Filament\Forms; 
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PesananResource extends Resource
{
    
    protected static ?string $model = Order::class;
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
        $activeTab = request('activeTab', 'Semua Pesanan');
    
        return $table        
            ->columns([
                ImageColumn::make('foto_order')
                    ->size(100)
                    ->label('Foto')
                    ->url(fn ($record) => Storage::url($record->foto_order)),
                
                Tables\Columns\TextColumn::make('jenis_unggas')
                    ->label('Nama'),
                
                Tables\Columns\TextColumn::make('total_harga')
                    ->label('Total Harga')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                
                Tables\Columns\TextColumn::make('stok')
                    ->label('Jumlah Pesanan'),
                
                Tables\Columns\TextColumn::make('tanggal_order')
                    ->label('Tanggal Pesanan')
                    ->sortable(),
                
                ToggleColumn::make('is_completed')
                    ->label('Sudah Dibayar')
                    ->visible(fn () => $activeTab !== 'Pesanan Gagal')
                    ->afterStateUpdated(function ($record, $state) {
                        $record->status_order = $state ? 'completed' : 'processed';
                        $record->save();
                    })
                    ->getStateUsing(fn ($record) => $record->status_order === 'completed')
                    
            ])
            ->defaultSort('tanggal_order', 'desc')
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
            // 'create' => Pages\CreatePesanan::route('/create'),
            // 'edit' => Pages\EditPesanan::route('/{record}/edit'),
        ];
    }
}