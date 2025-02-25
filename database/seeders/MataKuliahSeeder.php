<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            ['kode' => 'MK001', 'nama' => 'Pemrograman Web', 'sks' => 3],
            ['kode' => 'MK002', 'nama' => 'Basis Data', 'sks' => 3],
            ['kode' => 'MK003', 'nama' => 'Kecerdasan Buatan', 'sks' => 4],
        ]);
    }
}
