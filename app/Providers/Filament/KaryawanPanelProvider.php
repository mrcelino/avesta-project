<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use App\Filament\Pages;
use Filament\Panel;
use App\Filament\Resources\DataResource;
use App\Filament\Resources\PesananResource;
use App\Filament\Resources\ProdukResource;
use App\Filament\Resources\TokoResource;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\BarChart;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class KaryawanPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->spa()
            ->brandLogo(asset('image/avesta2.png'))
            ->brandLogoHeight('3rem')
            ->default()
            ->font('Poppins')
            ->darkMode(false)
            ->id('karyawan')
            ->resources([
                // DataResource::class, // Gunakan resource yang sudah ada
                ProdukResource::class, PesananResource::class, TokoResource::class
            ])
            ->path('karyawan')
            ->colors([
                'primary' => '#FB657A',
            ])
            ->discoverResources(in: app_path('Filament/Karyawan/Resources'), for: 'App\\Filament\\Karyawan\\Resources')
            ->discoverPages(in: app_path('Filament/Karyawan/Pages'), for: 'App\\Filament\\Karyawan\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Karyawan/Widgets'), for: 'App\\Filament\\Karyawan\\Widgets')
            ->widgets([
                StatsOverview::class, // StatsOverview akan muncul di atas
                BarChart::class,      // BarChart muncul di bawah
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}