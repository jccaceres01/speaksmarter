<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@speaksmarter.net',
            'password' => Hash::make('admin')
        ]);

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@speaksmarter.net',
            'password' => Hash::make('editor')
        ]);

        $admin->assignRole('admin');
        $editor->assignRole('editor');
    }
}
