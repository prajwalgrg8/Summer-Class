<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Fast-paced, high-stakes, adrenaline-filled.'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'Light-hearted, humorous, and entertaining.'
        ]);

        Genre::create([
            'name' => 'Sci-Fi',
            'description' => 'Futuristic, technology-driven narratives.'
        ]);

        


    }
}
