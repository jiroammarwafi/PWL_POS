<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'FnB', 'kategori_nama' => 'Food and Beverage'],
            ['kategori_id' => 2, 'kategori_kode' => 'BnH', 'kategori_nama' => 'Beauty and Health'],
            ['kategori_id' => 3, 'kategori_kode' => 'HnC', 'kategori_nama' => 'Home and Care'],
            ['kategori_id' => 4, 'kategori_kode' => 'BnK', 'kategori_nama' => 'Baby and Kids'],
            ['kategori_id' => 5, 'kategori_kode' => 'E', 'kategori_nama' => 'Electronics'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
