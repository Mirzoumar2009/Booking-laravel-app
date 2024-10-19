<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin1 User1',
            'email' => 'admin1@example1.com',
            'password' => bcrypt('password1'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Manager2 User2',
            'email' => 'manager2@example2.com',
            'password' => bcrypt('password2'),
            'role' => 'manager',
        ]);

        User::create([
            'name' => 'Guest3 User3',
            'email' => 'guest3@example3.com',
            'password' => bcrypt('password3'),
            'role' => 'guest',
        ]);
    }
}
