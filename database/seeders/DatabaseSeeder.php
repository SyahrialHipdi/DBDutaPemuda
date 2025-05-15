<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@example.com',
        'password' => '12345',
        'role' => 'admin'
        ]);

        Admin::create([
        'name' => 'Verifikator',
        'email' => 'verifikator@example.com',
        'password' => '12345',
        'role' => 'verifikator'
        ]);

        Admin::create([
        'name' => 'Juri',
        'email' => 'juri@example.com',
        'password' => '12345',
        'role' => 'juri'
        ]);
    }
}
