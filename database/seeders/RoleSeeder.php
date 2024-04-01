<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['id' => '100', 'role_name' => 'Admin']);
        Role::create(['id' => '200', 'role_name' => 'Staff User']);
        Role::create(['id' => '300', 'role_name' => 'Restaurant Admin']);
        Role::create(['id' => '0', 'role_name' => 'Site User']);

    }
}
