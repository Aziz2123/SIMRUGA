<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Facades\Auth;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Warga; // Pastikan model Warga ada
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class CardWargaOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '5s';

    protected function getCards(): array
    {
        // Menghitung jumlah warga
        $jumlahWarga = Warga::count();
        $jumlahWargaPendatang = Warga::where('jenis_warga', 'Pendatang')->count(); // Menghitung warga baru berdasarkan jenis_warga
        $jumlahWargaLokal = Warga::where('jenis_warga', 'Lokal')->count(); // Menghitung warga baru berdasarkan jenis_warga

        return [
            Card::make('Data Warga', $jumlahWarga)
                ->url('admin/wargas')
                ->color('primary')
                ->icon('heroicon-o-users')
                ->extraAttributes(['class' => 'hover-shadow']),

            Card::make('Warga Pendatang', $jumlahWargaPendatang)
                ->url('admin/wargas?filter=new')
                ->color('success')
                ->icon('heroicon-o-users')
                ->extraAttributes(['class' => 'hover-shadow']),

            Card::make('Warga Lokal', $jumlahWargaLokal)
                ->url('admin/wargas?filter=new')
                ->color('success')
                ->icon('heroicon-o-users')
                ->extraAttributes(['class' => 'hover-shadow']),
        ];
    }
    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_warga_widget'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }
}
