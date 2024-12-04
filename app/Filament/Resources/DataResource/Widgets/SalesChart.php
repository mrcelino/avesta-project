<?php

namespace App\Filament\Resources\DataResource\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Cache;

class SalesChart extends ChartWidget
{
    protected static ?string $title = 'Penjualan Ayam';
    protected int | string | array $columnSpan = 'full';
    protected static ?string $maxHeight = '300px';

    protected function getType(): string
    {
        return 'bar';
    }

    // Mendapatkan data dengan cache
    protected function getData(): array
    {
        $filter = $this->filter ?? 'week';

        // Tentukan key cache berdasarkan filter dan waktu kadaluarsa (misalnya 60 menit)
        $cacheKey = "sales_chart_data_{$filter}";

        // Cek apakah data sudah ada di cache, jika tidak, hitung dan simpan dalam cache
        return Cache::remember($cacheKey, 20, function () use ($filter) {
            switch ($filter) {
                case 'week':
                    return $this->getWeeklySales();
                case 'month':
                    return $this->getMonthlySales();
                case 'year':
                    return $this->getYearlySales();
                default:
                    return $this->getWeeklySales();
            }
        });
    }

    // Data penjualan mingguan
    protected function getWeeklySales(): array
    {
        return [
            'labels' => ['Ayam Utuh', 'Dada Ayam', 'Ceker Ayam', 'Ayam Fillet', 'Jeroan'],
            'datasets' => [
                [
                    'label' => 'Penjualan Mingguan (Unit)',
                    'data' => [
                        rand(50, 200),   // Ayam Utuh
                        rand(30, 150),   // Dada Ayam
                        rand(100, 250),  // Ceker Ayam
                        rand(40, 180),   // Ayam Fillet
                        rand(20, 100),   // Jeroan
                    ],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.6)',
                ],
            ],
        ];
    }

    // Data penjualan bulanan
    protected function getMonthlySales(): array
    {
        return [
            'labels' => ['Ayam Utuh', 'Dada Ayam', 'Ceker Ayam', 'Ayam Fillet', 'Jeroan'],
            'datasets' => [
                [
                    'label' => 'Penjualan Bulanan (Unit)',
                    'data' => [
                        rand(200, 800),   // Ayam Utuh
                        rand(150, 600),   // Dada Ayam
                        rand(400, 1000),  // Ceker Ayam
                        rand(180, 700),   // Ayam Fillet
                        rand(100, 400),   // Jeroan
                    ],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.6)',
                ],
            ],
        ];
    }

    // Data penjualan tahunan
    protected function getYearlySales(): array
    {
        return [
            'labels' => ['Ayam Utuh', 'Dada Ayam', 'Ceker Ayam', 'Ayam Fillet', 'Jeroan'],
            'datasets' => [
                [
                    'label' => 'Penjualan Tahunan (Unit)',
                    'data' => [
                        rand(1000, 5000),   // Ayam Utuh
                        rand(800, 4000),    // Dada Ayam
                        rand(1500, 6000),   // Ceker Ayam
                        rand(900, 4500),    // Ayam Fillet
                        rand(500, 2500),    // Jeroan
                    ],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.6)',
                ],
            ],
        ];
    }

    // Filter untuk memilih jenis data (minggu, bulan, tahun)
    protected function getFilters(): ?array
    {
        return [
            'week' => 'Minggu ini',
            'month' => 'Bulan ini',
            'year' => 'Tahun ini',
        ];
    }

    // Deskripsi widget
    public function getDescription(): ?string
    {
        return 'Jumlah penjualan dari berbagai produk ayam';
    }
}