<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\Unggas;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pesanan Berhasil', $this->getPesananBerhasil()),
            Stat::make('Jumlah Produk', $this->getJumlahProduk()),
            Stat::make('Jumlah Karyawan', $this->getJumlahKaryawan()),
        ];
    }

    protected function getPesananBerhasil(): int
    {
        // Sesuaikan dengan kolom status_order di tabel order
        return Order::where('status_order', 'completed')->count();
    }

    protected function getJumlahProduk(): int
    {
        // Hitung jumlah record di tabel unggas
        return Unggas::count();
    }

    protected function getJumlahKaryawan(): int
    {
        // Hitung jumlah pengguna dengan role 'karyawan'
        return User::where('role', 'karyawan')->count();
    }
    
}