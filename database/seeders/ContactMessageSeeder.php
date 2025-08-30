<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::create([
            'name' => 'Riani Destianti',
            'email' => 'riani@example.com',
            'message' => 'Halo, ini pesan pertama!',
        ]);

        ContactMessage::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'message' => 'Tolong hubungi saya kembali.',
        ]);

        ContactMessage::create([
            'name' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'message' => 'Ini hanya testing pesan.',
        ]);
    }
}
