<?php

namespace App\Filament\Resources\DataResource\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Cache;

class BarChart extends ChartWidget
{
    protected static ?string $maxHeight = '300px';
    
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    // Mendapatkan data chart dengan cache
    protected function getData(): array
    {
        $filter = $this->filter ?? 'week';

        // Tentukan key cache berdasarkan filter dan waktu kadaluarsa (misalnya 60 menit)
        $cacheKey = "chart_data_{$filter}";

        // Cek apakah data sudah ada di cache, jika tidak, hitung dan simpan dalam cache
        return Cache::remember($cacheKey, 20, function () use ($filter) {
            switch ($filter) {
                case 'week':
                    return $this->getWeeklyData();
                case 'month':
                    return $this->getMonthlyData();
                case 'year':
                    return $this->getYearlyData();
                default:
                    return $this->getWeeklyData();
            }
        });
    }

    // Data untuk chart mingguan
    protected function getWeeklyData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Penjualan Mingguan',
                    'data' => [
                        rand(1000, 5000), 
                        rand(1000, 5000), 
                        rand(1000, 5000), 
                        rand(1000, 5000), 
                        rand(1000, 5000), 
                        rand(1000, 5000), 
                        rand(1000, 5000)
                    ],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.6)',
                ],
            ],
            'labels' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
        ];
    }

    // Data untuk chart bulanan
    protected function getMonthlyData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Penjualan Bulanan',
                    'data' => [
                        rand(10000, 50000), 
                        rand(10000, 50000), 
                        rand(10000, 50000), 
                        rand(10000, 50000)
                    ],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.6)',
                ],
            ],
            'labels' => ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
        ];
    }

    // Data untuk chart tahunan
    protected function getYearlyData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Penjualan Tahunan',
                    'data' => [
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000),
                        rand(50000, 200000)
                    ],
                    'backgroundColor' => 'rgba(255, 99, 132, 0.6)',
                ],
            ],
            'labels' => [
                'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 
                'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
            ],
        ];
    }

    // Menentukan tipe chart
    protected function getType(): string
    {
        return 'bar';
    }

    // Menentukan filter chart
    protected function getFilters(): ?array
    {
        return [
            'week' => 'Minggu ini',
            'month' => 'Bulan ini',
            'year' => 'Tahun ini',
        ];
    }

    // Deskripsi untuk widget chart
    public function getDescription(): ?string
    {
        return 'Statistik tokomu yang perlu kamu monitor untuk jaga memaksimalkan penjualan.';
    }
}