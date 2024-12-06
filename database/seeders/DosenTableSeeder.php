<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert([
            [
                'user_id' => 16, // Mengacu pada user dosen
                'nip' => '123456',
                'nama' => 'RIwi',
                'departemen' => 'Teknik Informatika',
            ],
            [
                'user_id' => 17, // Mengacu pada user dosen
                'nip' => '654321',
                'nama' => 'Noto',
                'departemen' => 'Sistem Informasi',
            ],
        ]);
    }
}
