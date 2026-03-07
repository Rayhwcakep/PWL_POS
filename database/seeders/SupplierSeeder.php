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
     DB::table('m_supplier')->insert([
    ['supplier_kode'=>'SP01','supplier_nama'=>'PT Sumber Jaya'],
    ['supplier_kode'=>'SP02','supplier_nama'=>'CV Makmur'],
    ['supplier_kode'=>'SP03','supplier_nama'=>'UD Sejahtera'],
]);
    }
}
