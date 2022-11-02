<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class KRSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            $mahasiswa = Mahasiswa::inRandomOrder()->first();
            $matakuliah = Matakuliah::inRandomOrder()->first();

            DB::table('krs')->insert(
                [
                    'id' => $faker->unique()->randomNumber(),
                    'npm' => $mahasiswa->npm,
                    'kode_matakuliah' => $matakuliah->kode_matakuliah,
                ]
            );
        }
    }
}
