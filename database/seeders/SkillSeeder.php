<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Backend & Programming Languages
            ['name' => 'PHP', 'category' => 'Backend'],
            ['name' => 'Laravel', 'category' => 'Backend'],
            ['name' => 'JavaScript', 'category' => 'Backend'],
            ['name' => 'Python', 'category' => 'Backend'],
            ['name' => 'Node.js', 'category' => 'Backend'],

            // Frontend & Interactive
            ['name' => 'HTML & CSS', 'category' => 'Frontend'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend'],
            ['name' => 'Phaser.js', 'category' => 'Frontend'], // Untuk 2D/Game web interactive

            // Database
            ['name' => 'MySQL', 'category' => 'Database'],
            ['name' => 'PostgreSQL', 'category' => 'Database'],

            // Tools & Utilities
            ['name' => 'Git & GitHub', 'category' => 'Tools'],
            ['name' => 'VS Code', 'category' => 'Tools'],
            ['name' => 'Vercel', 'category' => 'Tools'],
            ['name' => 'dbdiagram.io', 'category' => 'Tools'],
        ];

        foreach ($skills as $skill) {
            Skill::firstOrCreate(
                ['name' => $skill['name']],
                ['category' => $skill['category']]
            );
        }
    }
}