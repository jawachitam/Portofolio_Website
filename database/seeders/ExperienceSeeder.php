<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'title' => 'Juara 1 Lomba Taekwondo',
            'organization' => 'Nama Penyelenggara',
            'description' => 'Menang lomba taekwondo tingkat kampus/kota.',
            'category' => 'Lomba',
            'image' => 'images/experiences/Taekwondo.jpeg',
            'link' => null,
            'year' => 2026,
        ]);
    }
}