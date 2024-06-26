<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisIuran extends Model
{
    use HasFactory;

    protected $table = 'jenis_iuran';

    protected $fillable = [
        'id',
        'nama_iuran',
        'jumlah_iuran',
    ];
}
