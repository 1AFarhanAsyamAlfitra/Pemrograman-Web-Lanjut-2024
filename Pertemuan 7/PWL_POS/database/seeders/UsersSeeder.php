<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   
                'user_id' => 1,
                'level_id' => 1, 
                'email' => 'admin@gmail.com', 
                'username' => 'admin', 
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [   
                'user_id' => 2,
                'level_id' => 2, 
                'username' => 'manager', 
                'email' => 'manager@gmail.com', 
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [   
                'user_id' => 3,
                'level_id' => 3, 
                'email' => 'staff@gmail.com', 
                'username' => 'staff', 
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('12345'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
