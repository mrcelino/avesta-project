<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BarChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Pesanan berhasil',
                    'data' => [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                ],
            ],
            'labels' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat','Sabtu', 'Minggu'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}