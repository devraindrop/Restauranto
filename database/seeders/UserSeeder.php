<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'Main Admin', 'email' => 'admin@main.com', 'password' => bcrypt('Admin#123'), 'role_id' => 100]);
        User::create(['name' => 'staff Admin', 'email' => 'staff@main.com', 'password' => bcrypt('staff#123'), 'role_id' => 200]);
        User::create(['name' => 'Cozy Admin', 'email' => 'cozy@admin.com', 'password' => bcrypt('cozy#123'), 'role_id' => 300]);
        User::create(['name' => 'family Admin', 'email' => 'family@admin.com', 'password' => bcrypt('family#123'), 'role_id' => 300]);
        User::create(['name' => 'xyz user', 'email' => 'user@xyz.com', 'password' => bcrypt('xyz#123'), 'role_id' => 0]);

    }
}
