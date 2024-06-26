<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanKeuangan extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'laporan_keuangan';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang dapat diisi
    protected $fillable = [
        'tanggal',
        'total_pemasukan',
        'keterangan_pemasukan',
        'keterangan_pengeluaran',
        'total_pengeluaran',
        'total_saldo',
        'id_pemasukan',
        'id_pengeluaran',
    ];

    /**
     * Relasi ke tabel pemasukan_keuangan
     */
    public function pemasukanKeuangan()
    {
        return $this->belongsTo(Pemasukan::class, 'id_pemasukan', 'id');
    }

    /**
     * Relasi ke tabel pengeluaran
     */
    public function pengeluaranKeuangan()
    {
        return $this->belongsTo(Pengeluaran::class, 'id_pengeluaran', 'id');
    }
}