<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa')->insert([
            ['nim' => '123456', 'nama' => 'Sefia Nasya', 'alamat' => 'Malang'],
            ['nim' => '654321', 'nama' => 'Dudu', 'alamat' => 'Jakarta']
        ]);
    }
}
