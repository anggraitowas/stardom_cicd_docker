<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 1,
                'password' => Hash::make('admin123'),
        
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 0,
                'password' => Hash::make('user1234'),
              
            ]
        ]);
        
    }
}
