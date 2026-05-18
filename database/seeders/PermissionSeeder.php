<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
public function run()
{
    $permissions = [
        'society.view','society.create','society.edit','society.delete',
        'member.view','member.create','member.edit','member.delete',
        'flat.view','flat.create','flat.edit','flat.delete',
        'maintenance.view','maintenance.create','maintenance.edit','maintenance.delete',
        'expense.view','expense.create','expense.edit','expense.delete',
    ];

    foreach ($permissions as $permission) {
        Permission::firstOrCreate(['name' => $permission]);
    }
}
}