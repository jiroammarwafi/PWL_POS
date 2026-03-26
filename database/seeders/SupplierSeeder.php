<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SPL001', 'supplier_nama' => 'Supplier A', 'supplier_alamat' => 'Jl. Supplier A No. 123'],
            ['supplier_id' => 2, 'supplier_kode' => 'SPL002', 'supplier_nama' => 'Supplier B', 'supplier_alamat' => 'Jl. Supplier B No. 456'],
            ['supplier_id' => 3, 'supplier_kode' => 'SPL003', 'supplier_nama' => 'Supplier C', 'supplier_alamat' => 'Jl. Supplier C No. 789'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
