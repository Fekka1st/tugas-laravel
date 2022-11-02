<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;
use App\Models\Matakuliah;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            $dosen = Dosen::inRandomOrder()->first();
            $matakuliah = Matakuliah::inRandomOrder()->first();

            DB::table('jadwal')->insert(
                [
                    'id' => $faker->unique()->randomNumber(),
                    'kode_matakuliah' => $matakuliah->kode_matakuliah,
                    'nidn' => $dosen->nidn,
                    'kelas' => $faker->randomElement(['A', 'B', 'C', 'NR']),
                    'hari' => $faker->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at", 'Sabtu']),
                    'jam' => $faker->time()
                ]
            );
        }
    }
}
