<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Pengumuman; 

class CardPengumumanOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '5s';

    protected function getCards(): array
    {
        // Menghitung jumlah pengumuman
        $jumlahPengumuman = Pengumuman::count();

        return [
            Card::make('Pengumuman', $jumlahPengumuman)
                ->url('admin/pengumumen')
                ->color('primary')
                ->icon('heroicon-o-megaphone')
                ->extraAttributes(['class' => 'hover-shadow']),
        ];
    }
}