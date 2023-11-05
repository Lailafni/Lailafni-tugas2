<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        collect([
            [
                'judul_film' => 'Alena Anak Ratu Iblis',
                'genre' => 'Horor',
                'tanggal_rilis' => '2023-01-05',
            ],
            [
                'judul_film' => 'Anak Titipan Setan',
                'genre' => 'Horor',
                'tanggal_rilis' => '2023-01-12',
            ],
            [
                'judul_film' => 'Mangkujiwo',
                'genre' => 'Horor',
                'tanggal_rilis' => '2023-01-26',
            ],
            [
                'judul_film' => 'Puisis Cinta Yang Membunuh',
                'genre' => 'Thriller',
                'tanggal_rilis' => '2023-01-05',
            ],
            [
                'judul_film' => 'Bayi Ajaib',
                'genre' => 'Horor',
                'tanggal_rilis' => '2023-01-19',
            ]
        ])->each(function ($film) {
            Film::create($film);
        });
    }
}
