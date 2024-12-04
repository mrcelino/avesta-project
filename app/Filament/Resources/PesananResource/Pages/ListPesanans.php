<?php

namespace App\Filament\Resources\PesananResource\Pages;

use App\Filament\Resources\PesananResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\ListRecords;

class ListPesanans extends ListRecords
{
    protected static ?string $title = 'Daftar Pesanan';
    protected static string $resource = PesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
    
    public function getTabs(): array
    {
        return [
            'Semua Pesanan' => Tab::make('Semua Pesanan')
                ->query(fn (Builder $query) => $query),
        
            'Sedang Berlangsung' => Tab::make('Sedang Berlangsung')
                ->query(fn (Builder $query) => $query->where('status_order', 'processed')),
        
            'Pesanan Selesai' => Tab::make('Pesanan Selesai')
                ->query(fn (Builder $query) => $query->where('status_order', 'completed')),
        
            'Pesanan Gagal' => Tab::make('Pesanan Gagal')
                ->query(fn (Builder $query) => $query->where('status_order', 'canceled')),
        ];
    }
}