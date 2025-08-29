<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::create([
            'title' => 'Juara Lomba Sains Nasional',
            'content' => 'Siswa Sekolah Kita berhasil meraih juara 1 Lomba Sains tingkat Nasional.'
        ]);
        News::create([
            'title' => 'Peresmian Gedung Baru',
            'content' => 'Gedung baru laboratorium resmi dibuka untuk menunjang kegiatan belajar.'
        ]);
        News::create([
            'title' => 'Workshop Teknologi',
            'content' => 'Sekolah mengadakan workshop teknologi dengan pembicara dari industri IT.'
        ]);
    }
}
