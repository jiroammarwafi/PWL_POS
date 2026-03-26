<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori 1: Food and Beverage
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Mie Ayam', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 20000, 'harga_jual' => 30000],
            
            // Kategori 2: Beauty and Health
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Lipstik', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Parfum', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'Pelembab Wajah', 'harga_beli' => 75000, 'harga_jual' => 120000],

            // Kategori 3: Home and Care
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG004', 'barang_nama' => 'Sabun Mandi', 'harga_beli' => 15000, 'harga_jual' => 25000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Detergen', 'harga_beli' => 12000, 'harga_jual' => 20000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Shampoo', 'harga_beli' => 15000, 'harga_jual' => 20000],

            // Kategori 4: Baby and Kids
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG010', 'barang_nama' => 'Popok Bayi', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'BRG011', 'barang_nama' => 'Susu Formula', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'BRG012', 'barang_nama' => 'Mainan Anak', 'harga_beli' => 30000, 'harga_jual' => 50000],

            // Kategori 5: Electronics
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG013', 'barang_nama' => 'Smartphone', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG014', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 6000000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'Headphone', 'harga_beli' => 300000, 'harga_jual' => 450000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
