<?php

namespace Database\Seeders;

use App\Models\informasiModel;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;;
use Str;

class artikel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 13 ; $i++) { 
            $artikel = new informasiModel;
            $artikel->judul = $faker->sentence(5);
            $artikel->isi = $faker->paragraph(5);
            $artikel->slug = Str::slug($artikel->judul);
            $artikel->gambar = "gerbang sekolah.jpg";
            $artikel->save();
        }
    }
}
