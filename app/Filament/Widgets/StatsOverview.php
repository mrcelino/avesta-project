<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    
    protected function getStats(): array
    {
        return [
            Stat::make('Pesanan Berhasil', '5'),
            Stat::make('Jumlah Produk', '3'),
            Stat::make('Jumlah Karyawan', '27'),
        ];
    }
}