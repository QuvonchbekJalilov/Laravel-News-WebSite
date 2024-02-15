<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);

        Permission::create(['name' => 'role:viewAny']);
        Permission::create(['name' => 'role:view']);
        Permission::create(['name' => 'role:assign']);
        Permission::create(['name' => 'role:create']);
        Permission::create(['name' => 'role:update']);
        Permission::create(['name' => 'role:delete']);
        Permission::create(['name' => 'role:restore']);
        Permission::create(['name' => 'permission:viewAny']);
        Permission::create(['name' => 'permission:view']);
        Permission::create(['name' => 'permission:assign']);
        Permission::create(['name' => 'permission:create']);
        Permission::create(['name' => 'permission:update']);
        Permission::create(['name' => 'permission:delete']);
        Permission::create(['name' => 'permission:restore']);
        Permission::create(['name' => 'user:viewAny']);
        Permission::create(['name' => 'user:view']);
        Permission::create(['name' => 'user:create']);
        Permission::create(['name' => 'user:update']);
        Permission::create(['name' => 'user:delete']);
        Permission::create(['name' => 'user:restore']);

        $editor = Role::create(['name' => 'editor']);
        $permissions = [
            Permission::create(['name' => 'post:viewAny']),
            Permission::create(['name' => 'post:view']),
            Permission::create(['name' => 'post:create']),
            Permission::create(['name' => 'post:update']),
            Permission::create(['name' => 'post:delete']),
            Permission::create(['name' => 'post:restore']),
            Permission::create(['name' => 'news:viewAny']),
            Permission::create(['name' => 'news:view']),
            Permission::create(['name' => 'news:create']),
            Permission::create(['name' => 'news:update']),
            Permission::create(['name' => 'news:delete']),
            Permission::create(['name' => 'news:restore']),
            Permission::create(['name' => 'category:create']),
            Permission::create(['name' => 'category:viewAny']),
            Permission::create(['name' => 'category:view']),
            Permission::create(['name' => 'category:update']),
            Permission::create(['name' => 'category:delete']),
            Permission::create(['name' => 'category:restore']),
        ];

        $editor->syncPermissions($permissions);

        Role::create(['name' => 'customer']);
    }
}
