<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure role exists
        $role = Role::firstOrCreate(['name' => 'superadmin']);

        // Create super admin user
        $user = User::firstOrCreate(
            ['email' => 'superadmin@society.com'],
            [
                'name' => 'Super Admin',
                'phone' => '9999999999',
                'password' => Hash::make('12345678'),
                'status' => 1,
            ]
        );

        // Assign role if not already assigned
        if (!$user->hasRole('superadmin')) {
            $user->assignRole($role);
        }
    }
}