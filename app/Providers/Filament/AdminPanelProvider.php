<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use App\Filament\Auth\CustomLogin;
use Filament\Support\Colors\Color;
use App\Filament\Widgets\WargaChart;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationGroup;
use App\Filament\Pages\Settings\Settings;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use App\Filament\Widgets\PermintaanLayanan;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use App\Filament\Widgets\PermintaanLayananWidget;
use App\Filament\Resources\PermintaanLayananResource;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;
use Outerweb\FilamentSettings\Filament\Plugins\FilamentSettingsPlugin;
use Althinect\FilamentSpatieRolesPermissions\FilamentSpatieRolesPermissionsPlugin;
use Njxqlus\FilamentProgressbar\FilamentProgressbarPlugin;
use Leandrocfe\FilamentApexCharts\FilamentApexChartsPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $panel = $panel
            ->default()
            ->sidebarCollapsibleOnDesktop(true)
            ->id('admin')
            ->path('admin')
            ->login(CustomLogin::class)
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            // ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                PermintaanLayananWidget::class,
                \App\Filament\Widgets\PermintaanLayananWidget::class,
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
                \Hasnayeen\Themes\Http\Middleware\SetTheme::class
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);

        // Conditionally register the plugin
        if ($this->userIsAdmin()) {
            $panel->plugin(FilamentSpatieRolesPermissionsPlugin::make());
        }

        $panel->plugin(FilamentProgressbarPlugin::make()->color('#29b'));

        $panel->plugins([
            FilamentApexChartsPlugin::make()
        ]);

        $panel->plugin(\Hasnayeen\Themes\ThemesPlugin::make())
            ->plugins([
                FilamentEditProfilePlugin::make()->setTitle('My Profile')
                    ->setNavigationLabel('My Profile')
                    ->setNavigationGroup('Setting')
                    ->setIcon('heroicon-o-user')
            ])
            ->databaseNotifications();

        return $panel;
    }

    // Method to check if the current user is an admin
    protected function userIsAdmin(): bool
    {
        $user = auth()->user();
        return $user && $user->hasRole('admin');
    }
}
