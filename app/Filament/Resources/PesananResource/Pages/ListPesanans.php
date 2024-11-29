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
        'Semua Pesanan' => Tab::make(),
        'Siap Diambil' => Tab::make(),
        'Pesanan Selesai' => Tab::make(),
        'Pesanan Gagal' => Tab::make()
    ];
}
}