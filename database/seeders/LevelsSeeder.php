<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Levels;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Levels::create([
            'name' => 'A1'
        ]);
        Levels::create([
            'name' => 'A2'
        ]);
        Levels::create([
            'name' => 'B1'
        ]);
        Levels::create([
            'name' => 'B2'
        ]);
        Levels::create([
            'name' => 'C1'
        ]);
        Levels::create([
            'name' => 'C2'
        ]);
    }
}
