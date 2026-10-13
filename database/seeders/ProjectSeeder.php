<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Website Portfolio',
            'description' => 'Personal website dibangun pakai Laravel 13 dan Tailwind CSS.',
            'image' => 'images/projects/Website.png',
            'link' => 'https://github.com/username/porto',
            'category' => 'Website',
            'is_highlight' => true,
            'date' => '2026-10-01',
        ]);

        Project::create([
            'title' => ' ',
            'description' => 'Personal website dibangun pakai Laravel 13 dan Tailwind CSS.',
            'image' => 'images/projects/Website.png',
            'link' => 'https://github.com/username/porto',
            'category' => 'Website',
            'is_highlight' => true,
            'date' => '2026-10-01',
        ]);
    }
}