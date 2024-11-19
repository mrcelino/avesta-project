<?php
 
namespace App\Filament\Pages;
use Filament\Panel;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\BarChart;
class Dashboard extends \Filament\Pages\Dashboard
{
  protected ?string $subheading = 'Kelola tokomu untuk jaga kepuasan pelanggan';
  protected static ?string $title = 'Beranda';
  protected static ?string $navigationIcon = 'heroicon-s-home';
  protected static ?string $navigationLabel = 'Beranda';
  public function panel(Panel $panel): Panel
  {
      return $panel
          // ...
          ->pages([])
          ->widgets([
            StatsOverview::class, // StatsOverview akan muncul di atas
            BarChart::class,      // BarChart muncul di bawah
            // Widgets\AccountWidget::class,
            // Widgets\FilamentInfoWidget::class,
        ]);
          
  }

}