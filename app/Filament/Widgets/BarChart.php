<?php

namespace App\Filament\Widgets;
use Illuminate\Support\Facades\Cache;
use Filament\Widgets\ChartWidget;

class BarChart extends ChartWidget
{
    protected static ?string $maxHeight = '345px';
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        // Cek apakah data sudah ada di cache
        $data = Cache::get('chart_data');
    
        // Jika tidak ada, buat data dan simpan ke cache
        if (!$data) {
            $data = [
                'datasets' => [
                    [
                        'label' => 'Pesanan berhasil',
                        'data' => [
                            rand(20, 100),   // Senin
                            rand(20, 100),   // Selasa
                            rand(20, 100),   // Rabu
                            rand(20, 100),   // Kamis
                            rand(20, 100),   // Jumat
                            rand(20, 100),   // Sabtu
                            rand(20, 100)    // Minggu
                        ],
                        'backgroundColor' => 'rgba(255, 99, 132, 0.6)',
                    ],
                ],
                'labels' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
            ];
    
            // Simpan data ke cache selama 60 menit
            Cache::put('chart_data', $data, 10);
        }
    
        return $data;
    }

    protected function getType(): string
    {
        return 'bar';
    }
}