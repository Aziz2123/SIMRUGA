<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use App\Models\PermintaanLayanan;
use Filament\Notifications\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;

class LayananWidget extends BaseWidget
{
    protected static ?string $heading = 'Daftar Permintaan Layanan';
    protected int | String | array $columnSpan = 'full';

    public static function canView(): bool // Fungsi untuk memeriksa hak akses
    {
        return Auth::user()->hasPermissionTo('view_layanan_widget'); // Pastikan Anda memiliki hak akses yang sesuai dengan permissionn
    }

    protected function getTableQuery(): Builder
    {
        return PermintaanLayanan::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('Nama Pengaju'),
            Tables\Columns\TextColumn::make('Tipe Layanan'),
            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'danger' => 'ditolak',
                    'warning' => 'pending',
                    'success' => 'selesai',
                    'primary' => 'proses',
                ]),
            Tables\Columns\TextColumn::make('deskripsi')
                ->visible(fn () => auth()->user()->hasRole('warga')),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->label('Dibuat Pada'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make()->visible(fn () => auth()->user()->hasRole('warga')),
            Tables\Actions\ViewAction::make()->visible(fn () => !auth()->user()->hasRole('sekretaris')),
            Tables\Actions\Action::make('ubahStatus')
                ->label('Ubah Status')
                ->form([
                    Select::make('status')
                        ->options([
                            'pending' => 'Pending',
                            'proses' => 'Diproses',
                            'ditolak' => 'Ditolak',
                            'selesai' => 'Selesai',
                        ])
                        ->required(),
                    Textarea::make('catatan')->label('Catatan'),
                ])
                ->action(function (PermintaanLayanan $record, array $data): void {
                    $record->status = $data['status'];
                    $record->catatan = $data['catatan']; // Simpan catatan yang diberikan oleh sekretaris
                    $record->save();

                    // Kirim notifikasi ke pengaju
                    $userPengaju = $record->user;
                    Notification::make()
                        ->success()
                        ->title('Status Permintaan  Layanan Telah Diubah')
                        ->body("Status permintaan layanan Anda dengan ID #" . $record->id . " telah diubah menjadi: " . $data['status'])
                        ->actions([
                            Action::make('Lihat')
                                ->url(fn () => '/admin/permintaan-layanans/' . $record->id)
                                ->color('primary')
                        ])
                        ->sendToDatabase($userPengaju);
                })
                ->visible(fn () => auth()->user()->hasRole('sekretaris')),
        ];
    }
}
