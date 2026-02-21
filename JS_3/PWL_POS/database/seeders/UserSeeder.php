<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
        [
            'user_id' => 1,
            'level_id' => 1,
            'username' => 'admin',
            'nama' => 'admin',
            'password' => Hash::make('12345'), // hash password
        ],
        [
            'user_id' => 2,
            'level_id' => 2,
            'username' => 'Manager',
            'nama' => 'Manager',
            'password' => Hash::make('12345'), // hash password
        ],
        [
            'user_id' => 3,
            'level_id' => 3,
            'username' => 'Staff',
            'nama' => 'Staff/Kasir',
            'password' => Hash::make('12345'), // hash password
        ],
    ];
        DB::table('m_user')->insert($data);
    }
}
