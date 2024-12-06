<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // Ganti dengan password yang diinginkan
                'role_id' => 1, // Admin
            ],
            [
                'name' => 'Dosen User',
                'email' => 'dosen@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // Dosen
            ],
            [
                'name' => 'Dosen User 2',
                'email' => 'dosen2@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // Dosen
            ],
            [
                'name' => 'Mahasiswa User',
                'email' => 'mahasiswa@example.com',
                'password' => Hash::make('password'),
                'role_id' => 3, // Mahasiswa
            ],
            [
                'name' => 'Mahasiswa User 2',
                'email' => 'mahasiswa2@example.com',
                'password' => Hash::make('password'),
                'role_id' => 3, // Mahasiswa
            ],
        ]);
    }
}
