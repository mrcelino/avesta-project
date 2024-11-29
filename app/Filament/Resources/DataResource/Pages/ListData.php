<?php

namespace App\Filament\Resources\DataResource\Pages;

use App\Filament\Resources\DataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListData extends ListRecords
{
    protected static ?string $title = 'Laporan Penjualan';
    protected static string $resource = DataResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            DataResource\Widgets\BarChart::class,
            DataResource\Widgets\SalesChart::class,
            
        ];
    }

}