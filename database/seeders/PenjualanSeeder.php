<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // 10 Transaksi Penjualan
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'John Doe', 'penjualan_kode' => 'A001', 'penjualan_tanggal' => '2024-06-01'],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Jane Smith', 'penjualan_kode' => 'A002', 'penjualan_tanggal' => '2024-06-02'],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'Bob Johnson', 'penjualan_kode' => 'A003', 'penjualan_tanggal' => '2024-06-03'],

            ['penjualan_id' => 4, 'user_id' => 2, 'pembeli' => 'Alice Brown', 'penjualan_kode' => 'M004', 'penjualan_tanggal' => '2024-06-04'],
            ['penjualan_id' => 5, 'user_id' => 2, 'pembeli' => 'Charlie Wilson', 'penjualan_kode' => 'M005', 'penjualan_tanggal' => '2024-06-05'],
            ['penjualan_id' => 6, 'user_id' => 2, 'pembeli' => 'David Davis', 'penjualan_kode' => 'M006', 'penjualan_tanggal' => '2024-06-06'],
            ['penjualan_id' => 7, 'user_id' => 2, 'pembeli' => 'Eva Martinez', 'penjualan_kode' => 'M007', 'penjualan_tanggal' => '2024-06-07'],
            
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Frank Garcia', 'penjualan_kode' => 'S008', 'penjualan_tanggal' => '2024-06-08'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Grace Lee', 'penjualan_kode' => 'S009', 'penjualan_tanggal' => '2024-06-09'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Henry Taylor', 'penjualan_kode' => 'S010', 'penjualan_tanggal' => '2024-06-10'],
        ];

        DB::table('t_penjualan')->insert($data);

    }
}
