<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warga')->insert([
            [
                'nama_warga' => 'John Doe',
                'id_kk' => 2,
                'id_rt' => 1,
                'alamat' => 'Jl. Merdeka No.1',
                'no_telepon' => '081234567890',
                'email' => 'johndoe@example.com',
                'NIK' => '1234567890123456',
                'tanggal_lahir' => '1980-01-01',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Pegawai Swasta',
                'foto_warga' => 'https://example.com/photo1.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '>900 watt',
                'luas_bangunan' => 120,
                'pengeluaran_bulanan' => 5000000.00,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 7000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Sinta',
                'id_kk' => 3,
                'id_rt' => 2,
                'alamat' => 'Jl. Kebangsaan No.10',
                'no_telepon' => '081234567891',
                'email' => 'sinta@example.com',
                'NIK' => '1234567890123457',
                'tanggal_lahir' => '1990-02-02',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Belum Menikah',
                'pekerjaan' => 'Guru',
                'foto_warga' => 'https://example.com/photo2.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Keluarga',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 90,
                'pengeluaran_bulanan' => 3000000.00,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 5000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data warga di sini dengan URL foto yang berbeda
            [
                'nama_warga' => 'Budi Santoso',
                'id_kk' => 4,
                'id_rt' => 1,
                'alamat' => 'Jl. Melati No.2',
                'no_telepon' => '081234567892',
                'email' => 'budi@example.com',
                'NIK' => '1234567890123458',
                'tanggal_lahir' => '1985-03-03',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Wiraswasta',
                'foto_warga' => 'https://example.com/photo3.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '900 watt',
                'luas_bangunan' => 100,
                'pengeluaran_bulanan' => 4000000.00,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 8000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Ani Suryani',
                'id_kk' => 5,
                'id_rt' => 2,
                'alamat' => 'Jl. Mawar No.3',
                'no_telepon' => '081234567893',
                'email' => 'ani@example.com',
                'NIK' => '1234567890123459',
                'tanggal_lahir' => '1990-04-04',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Belum Menikah',
                'pekerjaan' => 'Dokter',
                'foto_warga' => 'https://example.com/photo4.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Keluarga',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 80,
                'pengeluaran_bulanan' => 2500000.00,
                'jumlah_anggota_keluarga' => 2,
                'penghasilan' => 10000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Dedi Kurniawan',
                'id_kk' => 6,
                'id_rt' => 1,
                'alamat' => 'Jl. Kenanga No.4',
                'no_telepon' => '081234567894',
                'email' => 'dedi@example.com',
                'NIK' => '1234567890123460',
                'tanggal_lahir' => '1975-05-05',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Pegawai Negeri',
                'foto_warga' => 'https://example.com/photo5.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '>900 watt',
                'luas_bangunan' => 150,
                'pengeluaran_bulanan' => 6000000.00,
                'jumlah_anggota_keluarga' => 5,
                'penghasilan' => 7000000,
                'tanggungan' => 3,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Eka Susanti',
                'id_kk' => 7,
                'id_rt' => 3,
                'alamat' => 'Jl. Anggrek No.5',
                'no_telepon' => '081234567895',
                'email' => 'eka@example.com',
                'NIK' => '1234567890123461',
                'tanggal_lahir' => '1987-06-06',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Karyawan Swasta',
                'foto_warga' => 'https://example.com/photo6.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 90,
                'pengeluaran_bulanan' => 3000000.00,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 6000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Fajar Pratama',
                'id_kk' => 8,
                'id_rt' => 2,
                'alamat' => 'Jl. Melati No.6',
                'no_telepon' => '081234567896',
                'email' => 'fajar@example.com',
                'NIK' => '1234567890123462',
                'tanggal_lahir' => '1982-07-07',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Wiraswasta',
                'foto_warga' => 'https://example.com/photo7.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '900 watt',
                'luas_bangunan' => 130,
                'pengeluaran_bulanan' => 4500000.00,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 8000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Gina Sari',
                'id_kk' => 9,
                'id_rt' => 1,
                'alamat' => 'Jl. Dahlia No.7',
                'no_telepon' => '081234567897',
                'email' => 'gina@example.com',
                'NIK' => '1234567890123463',
                'tanggal_lahir' => '1992-08-08',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Pengusaha',
                'foto_warga' => 'https://example.com/photo8.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 110,
                'pengeluaran_bulanan' => 4000000.00,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 12000000,
                'tanggungan' => 3,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Hadi Saputra',
                'id_kk' => 10,
                'id_rt' => 2,
                'alamat' => 'Jl. Melati No.8',
                'no_telepon' => '081234567898',
                'email' => 'hadi@example.com',
                'NIK' => '1234567890123464',
                'tanggal_lahir' => '1979-09-09',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Karyawan Swasta',
                'foto_warga' => 'https://example.com/photo9.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '>900 watt',
                'luas_bangunan' => 120,
                'pengeluaran_bulanan' => 3500000.00,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 7000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Indra Lesmana',
                'id_kk' => 11,
                'id_rt' => 3,
                'alamat' => 'Jl. Mawar No.9',
                'no_telepon' => '081234567899',
                'email' => 'indra@example.com',
                'NIK' => '1234567890123465',
                'tanggal_lahir' => '1980-10-10',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Pengusaha',
                'foto_warga' => 'https://example.com/photo10.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 150,
                'pengeluaran_bulanan' => 7000000.00,
                'jumlah_anggota_keluarga' => 5,
                'penghasilan' => 15000000,
                'tanggungan' => 3,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Joko Widodo',
                'id_kk' => 12,
                'id_rt' => 1,
                'alamat' => 'Jl. Tulip No.10',
                'no_telepon' => '081234567900',
                'email' => 'joko@example.com',
                'NIK' => '1234567890123466',
                'tanggal_lahir' => '1970-11-11',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'PNS',
                'foto_warga' => 'https://example.com/photo11.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '>900 watt',
                'luas_bangunan' => 160,
                'pengeluaran_bulanan' => 5000000.00,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 8000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Kiki Amelia',
                'id_kk' => 13,
                'id_rt' => 2,
                'alamat' => 'Jl. Sakura No.11',
                'no_telepon' => '081234567901',
                'email' => 'kiki@example.com',
                'NIK' => '1234567890123467',
                'tanggal_lahir' => '1993-12-12',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Belum Menikah',
                'pekerjaan' => 'Guru',
                'foto_warga' => 'https://example.com/photo12.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Kontrak',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 100,
                'pengeluaran_bulanan' => 2000000.00,
                'jumlah_anggota_keluarga' => 2,
                'penghasilan' => 4000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Lukman Hakim',
                'id_kk' => 14,
                'id_rt' => 1,
                'alamat' => 'Jl. Pahlawan No.12',
                'no_telepon' => '081234567902',
                'email' => 'lukman@example.com',
                'NIK' => '1234567890123468',
                'tanggal_lahir' => '1983-01-13',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Pengusaha',
                'foto_warga' => 'https://example.com/photo13.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '>900 watt',
                'luas_bangunan' => 150,
                'pengeluaran_bulanan' => 6000000.00,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 10000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Maria Ulfa',
                'id_kk' => 15,
                'id_rt' => 3,
                'alamat' => 'Jl. Merpati No.13',
                'no_telepon' => '081234567903',
                'email' => 'maria@example.com',
                'NIK' => '1234567890123469',
                'tanggal_lahir' => '1987-02-14',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Karyawan Swasta',
                'foto_warga' => 'https://example.com/photo14.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Kontrak',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 100,
                'pengeluaran_bulanan' => 3500000.00,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 7000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Nina Kurnia',
                'id_kk' => 16,
                'id_rt' => 1,
                'alamat' => 'Jl. Garuda No.14',
                'no_telepon' => '081234567904',
                'email' => 'nina@example.com',
                'NIK' => '1234567890123470',
                'tanggal_lahir' => '1990-03-15',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Belum Menikah',
                'pekerjaan' => 'Dokter',
                'foto_warga' => 'https://example.com/photo15.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '>900 watt',
                'luas_bangunan' => 150,
                'pengeluaran_bulanan' => 5000000.00,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 12000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Oscar Wijaya',
                'id_kk' => 17,
                'id_rt' => 2,
                'alamat' => 'Jl. Elang No.15',
                'no_telepon' => '081234567905',
                'email' => 'oscar@example.com',
                'NIK' => '1234567890123471',
                'tanggal_lahir' => '1981-04-16',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Wiraswasta',
                'foto_warga' => 'https://example.com/photo16.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 140,
                'pengeluaran_bulanan' => 4500000.00,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 9000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Putri Amelia',
                'id_kk' => 18,
                'id_rt' => 3,
                'alamat' => 'Jl. Kesturi No.16',
                'no_telepon' => '081234567906',
                'email' => 'putri@example.com',
                'NIK' => '1234567890123472',
                'tanggal_lahir' => '1992-05-17',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Belum Menikah',
                'pekerjaan' => 'Guru',
                'foto_warga' => 'https://example.com/photo17.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Keluarga',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 130,
                'pengeluaran_bulanan' => 3000000.00,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 5000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Qori Hidayat',
                'id_kk' => 19,
                'id_rt' => 1,
                'alamat' => 'Jl. Kelapa No.17',
                'no_telepon' => '081234567907',
                'email' => 'qori@example.com',
                'NIK' => '1234567890123473',
                'tanggal_lahir' => '1986-06-18',
                'jenis_kelamin' => 'L',
                'status_kawin' => 'Menikah',
                'pekerjaan' => 'Pegawai Negeri',
                'foto_warga' => 'https://example.com/photo18.jpg',
                'transportasi' => 'Motor',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'Sumur',
                'token_listrik' => '>900 watt',
                'luas_bangunan' => 120,
                'pengeluaran_bulanan' => 3500000.00,
                'jumlah_anggota_keluarga' => 4,
                'penghasilan' => 7000000,
                'tanggungan' => 2,
                'jenis_warga' => 'Tetap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Rina Permata',
                'id_kk' => 20,
                'id_rt' => 2,
                'alamat' => 'Jl. Durian No.18',
                'no_telepon' => '081234567908',
                'email' => 'rina@example.com',
                'NIK' => '1234567890123474',
                'tanggal_lahir' => '1991-07-19',
                'jenis_kelamin' => 'P',
                'status_kawin' => 'Belum Menikah',
                'pekerjaan' => 'Karyawan Swasta',
                'foto_warga' => 'https://example.com/photo19.jpg',
                'transportasi' => 'Mobil',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'sumber_air_bersih' => 'PDAM',
                'token_listrik' => '450 watt',
                'luas_bangunan' => 110,
                'pengeluaran_bulanan' => 3000000.00,
                'jumlah_anggota_keluarga' => 3,
                'penghasilan' => 6000000,
                'tanggungan' => 1,
                'jenis_warga' => 'Pendatang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        foreach ($wargas as $warga) {
            DB::table('wargas')->insert($warga);
        }
    }
}
