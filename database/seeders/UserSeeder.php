<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'level_id' => 1,
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ], [
                'id' => 2,
                'level_id' => 1,
                'username' => 'ketuarw',
                'nama' => 'Ketua RW',
                'password' => Hash::make('12345'),
            ], [
                'id' => 3,
                'level_id' => 1,
                'username' => 'sekretaris',
                'nama' => 'Sekretaris RW',
                'password' => Hash::make('12345'),
            ],
            [
                'id' => 4,
                'level_id' => 1,
                'username' => 'bendahara',
                'nama' => 'Bendahara RW',
                'password' => Hash::make('12345'),
            ],
            [
                'id' => 5,
                'level_id' => 2,
                'rt_id' => 1,
                'username' => 'ketuart1',
                'nama' => 'Ketua RT 1',
                'password' => Hash::make('12345'),
            ],
            [
                'id' => 6,
                'level_id' => 3,
                'rt_id' => 2,
                'username' => 'ketuart2',
                'nama' => 'Ketua RT 2',
                'password' => Hash::make('12345'),
            ],
            [
                'id' => 7,
                'level_id' => 3,
                'rt_id' => 3,
                'username' => 'ketuart3',
                'nama' => 'Ketua RT 3',
                'password' => Hash::make('12345'),
            ],

            [
                'id' => 8,
                'level_id' => 4,
                'username' => 'warga',
                'nama' => 'Warga',
                'password' => Hash::make('12345'),
            ],
        ];
        DB::table('m_user')->insert($data);
    }
}
