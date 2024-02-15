<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'adminov',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234567')
        ]);

        $admin->assignRole('admin');

        $customer = User::create([
            'first_name' => 'Quvonchbek',
            'last_name' => 'Jalilov',
            'email' => 'quvonchbek@gmail.com',
            'password' => Hash::make('customer234')
        ]);

        $customer->assignRole('customer');

        $editor = User::create([
            'first_name' => 'Sherali',
            'last_name' => 'Bobonorov',
            'email' => 'sherali@gmail.com',
            'password' => Hash::make('editor123')
        ]);

        $editor->assignRole('editor');
    }
}
