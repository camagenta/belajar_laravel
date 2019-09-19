<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('pegawai')->insert([
        //     'pegawai_nama' => 'Amatullah Husna',
        //     'pegawai_jabatan' => 'Anak Ayah',
        //     'pegawai_umur' => 1,
        //     'pegawai_alamat' => 'Vila Santika Blok A No 6'
        // ]);

        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){ 
            DB::table('pegawai')->insert([
                'pegawai_nama' => $faker->name,
                'pegawai_jabatan' => $faker->jobTitle,
                'pegawai_umur' => $faker->numberBetween($min = 20, $max = 55),
                'pegawai_alamat' => $faker->address
            ]);
        }
    }
}
