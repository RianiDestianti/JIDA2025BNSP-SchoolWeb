<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        Activity::create([
            'title' => 'Pramuka',
            'image' => 'assets/kegiatan1.jpg',
            'description' => 'Kegiatan pramuka rutin setiap hari Jumat sore.'
        ]);
        Activity::create([
            'title' => 'Ekskul Musik',
            'image' => 'assets/kegiatan2.jpg',
            'description' => 'Mengembangkan bakat seni musik untuk siswa.'
        ]);
        Activity::create([
            'title' => 'Olahraga',
            'image' => 'assets/kegiatan3.jpg',
            'description' => 'Kegiatan olahraga setiap minggu pagi.'
        ]);
    }
}
