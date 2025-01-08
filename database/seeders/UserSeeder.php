<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
        ])->assignRole(RoleEnum::user->value);

        User::factory()->create([
            'name' => 'vendor customer',
            'email' => 'vendor@example.com',
        ])->assignRole(RoleEnum::vendor->value);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ])->assignRole(RoleEnum::Administrator->value);
    }
}
