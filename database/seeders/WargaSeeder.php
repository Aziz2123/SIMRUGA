<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warga')->insert([
            [
                'id_kk' => 11,
                'id_rt' => 4,
                'nama_warga' => 'Ahmad Fauzi',
                'alamat' => 'Jl. Merdeka No. 1',
                'no_telepon' => '081234567890',
                'NIK' => '3201234567890001',
                'tanggal_lahir' => '1980-01-01',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'PNS',
                'foto_warga' => 'https://example.com/photos/ahmad_fauzi.jpg',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => 450,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 5000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap'
            ],
            [
                'id_kk' => 22,
                'id_rt' => 6,
                'nama_warga' => 'Siti Aminah',
                'alamat' => 'Jl. Merdeka No. 2',
                'no_telepon' => '081234567891',
                'NIK' => '3201234567890002',
                'tanggal_lahir' => '1985-02-02',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Janda',
                'pekerjaan' => 'Ibu Rumah Tangga',
                'foto_warga' => 'https://example.com/photos/siti_aminah.jpg',
                'status_kepemilikan_rumah' => 'Kontrak',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => 900,
                'jumlah_anggota_keluarga' => 5,
                'penghasilan' => 6000000,
                'tanggungan' => 3,
                'jenis_warga' => 'Pendatang'
            ],
            [
                'id_kk' => 23,
                'id_rt' => 6,
                'nama_warga' => 'Budi Santoso',
                'alamat' => 'Jl. Kemerdekaan No. 3',
                'no_telepon' => '081234567892',
                'NIK' => '3201234567890003',
                'tanggal_lahir' => '1970-03-03',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Guru',
                'foto_warga' => 'https://example.com/photos/budi_santoso.jpg',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => 1300,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 7000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Tetap'
            ],
            [
                'id_kk' => 14,
                'id_rt' => 7,
                'nama_warga' => 'Ani Setiani',
                'alamat' => 'Jl. Kemerdekaan No. 4',
                'no_telepon' => '081234567893',
                'NIK' => '3201234567890004',
                'tanggal_lahir' => '1990-04-04',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Dokter',
                'foto_warga' => 'https://example.com/photos/ani_setiani.jpg',
                'status_kepemilikan_rumah' => 'Kontrak',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => 450,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 4000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap'
            ],
            [
                'id_kk' => 15,
                'id_rt' => 8,
                'nama_warga' => 'Dewi Sartika',
                'alamat' => 'Jl. Harmoni No. 5',
                'no_telepon' => '081234567894',
                'NIK' => '3201234567890005',
                'tanggal_lahir' => '1988-05-05',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Wiraswasta',
                'foto_warga' => 'https://example.com/photos/dewi_sartika.jpg',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => 900,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 6000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap'
            ],
            [
                'id_kk' => 16,
                'id_rt' => 9,
                'nama_warga' => 'Eko Purwanto',
                'alamat' => 'Jl. Harmoni No. 6',
                'no_telepon' => '081234567895',
                'NIK' => '3201234567890006',
                'tanggal_lahir' => '1983-06-06',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Duda',
                'pekerjaan' => 'Petani',
                'foto_warga' => 'https://example.com/photos/eko_purwanto.jpg',
                'status_kepemilikan_rumah' => 'Kontrak',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => 1300,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 7000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Tetap'
            ],
            [
                'id_kk' => 17,
                'id_rt' => 10,
                'nama_warga' => 'Fajar Nugroho',
                'alamat' => 'Jl. Harmoni No. 7',
                'no_telepon' => '081234567896',
                'NIK' => '3201234567890007',
                'tanggal_lahir' => '1987-07-07',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Pengacara',
                'foto_warga' => 'https://example.com/photos/fajar_nugroho.jpg',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => 450,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 5000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap'
            ],
            [
                'id_kk' => 18,
                'id_rt' => 1,
                'nama_warga' => 'Gina Lestari',
                'alamat' => 'Jl. Harmoni No. 8',
                'no_telepon' => '081234567897',
                'NIK' => '3201234567890008',
                'tanggal_lahir' => '1992-08-08',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Perawat',
                'foto_warga' => 'https://example.com/photos/gina_lestari.jpg',
                'status_kepemilikan_rumah' => 'Kontrak',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => 900,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 4500000,
                'tanggungan' => 1,
                'jenis_warga' => 'Tetap'
            ],
            [
                'id_kk' => 25,
                'id_rt' => 2,
                'nama_warga' => 'Hariyanto',
                'alamat' => 'Jl. Sejahtera No. 9',
                'no_telepon' => '081234567898',
                'NIK' => '3201234567890009',
                'tanggal_lahir' => '1981-09-09',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Supir',
                'foto_warga' => 'https://example.com/photos/hariyanto.jpg',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => 1300,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 4000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap'
            ],
            [
                'id_kk' => 10,
                'id_rt' => 3,
                'nama_warga' => 'Ika Nuraini',
                'alamat' => 'Jl. Sejahtera No. 10',
                'no_telepon' => '081234567899',
                'NIK' => '3201234567890010',
                'tanggal_lahir' => '1989-10-10',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Karyawan Swasta',
                'foto_warga' => 'https://example.com/photos/ika_nuraini.jpg',
                'status_kepemilikan_rumah' => 'Kontrak',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => 450,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 3500000,
                'tanggungan' => 1,
                'jenis_warga' => 'Tetap'
            ]
        ]);
    }
}
