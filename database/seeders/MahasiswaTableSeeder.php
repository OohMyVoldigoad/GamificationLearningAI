<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'user_id' => 18, // Mengacu pada user mahasiswa
                'nim' => '123456789',
                'nama' => 'George',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'user_id' => 19, // Mengacu pada user mahasiswa
                'nim' => '987654321',
                'nama' => 'Ahmad Ganteng',
                'jurusan' => 'Sistem Informasi',
            ],
        ]);
    }
}
