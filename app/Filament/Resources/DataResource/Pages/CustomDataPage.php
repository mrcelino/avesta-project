<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomDataPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static string $view = 'filament.pages.custom-data-page';

    public function mount()
    {
        static::$navigationLabel = 'Statistik Produk';
    }
}