<?php

namespace App\Filament\Resources\DataResource\Widgets;

use Filament\Widgets\ChartWidget;

class BarChart extends ChartWidget
{
    protected static ?string $maxHeight = '300px';
    
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
    protected function getFilters(): ?array
    {
    return [
        'week' => 'Last week',
        'month' => 'Last month',
        'year' => 'This year',
        ];
    }
    public function getDescription(): ?string
    {
        return 'Statistik tokomu yang perlu kamu monitor untuk jaga memaksimalkan penjualan.';
    }
}