<?php

namespace App\Filament\Resources\DataResource\Widgets;

use Filament\Widgets\ChartWidget;

class SalesChart extends ChartWidget
{
    protected static ?string $title = 'Penjualan Ayam';
    protected int | string | array $columnSpan = 'full';
    protected static ?string $maxHeight = '300px';

    protected function getType(): string
    {
        return 'bar';
    }
    protected function getData(): array
    {
        // Data dummy penjualan untuk produk ayam
        return [
            'labels' => ['Ayam Utuh', 'Dada Ayam', 'Ceker Ayam', 'Ayam Fillet', 'Jeroan'],
            'datasets' => [
                [
                    'label' => 'Penjualan (Unit)',
                    'data' => [
                        120,  // Ayam Utuh
                        80,   // Dada Ayam
                        150,  // Ceker Ayam
                        90,   // Ayam Fillet
                        60,   // Jeroan
                    ],
                ],
            ],
        ];
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
        return 'Jumlah penjualan dari berbagai produk ayam';
    }

}