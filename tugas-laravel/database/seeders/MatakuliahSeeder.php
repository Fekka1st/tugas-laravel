<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matakuliah = [
            'Manajemen Keamanan Informasi',
            'Pemrograman Mobile',
            'Pemrograman Web Lanjut',
            'Sistem informasi',
            'Manajemen Proyek Perangkat Lunak',
            'Tata Kelola Teknologi Informasi'
        ];

        for ($i = 0; $i < 10; $i++) {
            DB::table('matakuliah')->insert(
                [
                    'kode_matakuliah' => 'IF-' . rand(00000, 99999),
                    'nama_matakuliah' => array_rand($matakuliah, 3)[0],
                    'sks' => rand(1, 4),
                ]
            );
        }
    }
}
