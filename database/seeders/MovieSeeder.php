<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'name' => 'Fast & Furious',
            'description' => 'An action-packed street racing movie.',
            'duration' => 2.30,
            'release_date' => '2001-06-22',
            'rating' => 7.8,
            'genre_id' => 1, // Action
            'language' => 'english',
            'cast' => 'Vin Diesel, Paul Walker',
        ]);

        Movie::create([
            'name' => 'The Hangover',
            'description' => 'Comedy about a bachelor party gone wrong.',
            'duration' => 1.45,
            'release_date' => '2009-06-05',
            'rating' => 7.7,
            'genre_id' => 2, // Comedy
            'language' => 'english',
            'cast' => 'Bradley Cooper, Zach Galifianakis',
        ]);
    }
}
