<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Membuat Data User
        User::create([
            'name' => 'Admin 01',
            'username' => 'admin1',
            'password' => bcrypt('admin'),
            'roles' => 'Admin'
        ]);
        User::create([
            'name' => 'Admin 02',
            'username' => 'admin2',
            'password' => bcrypt('admin'),
            'roles' => 'Admin'
        ]);
        User::create([
            'name' => 'Deli Serdang',
            'username' => 'deliserdang',
            'password' => bcrypt('deliserdang'),
            'roles' => 'User'
        ]);
        User::create([
            'name' => 'Medan',
            'username' => 'medan',
            'password' => bcrypt('medan'),
            'roles' => 'User'
        ]);
    }
}
