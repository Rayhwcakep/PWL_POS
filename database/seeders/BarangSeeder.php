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
         $data = [];
        $id = 1;

        for ($supplier = 1; $supplier <= 3; $supplier++) {
            for ($i = 1; $i <= 5; $i++) {
                $data[] = [
                    'barang_id'   => $id,
                    'kategori_id' => (($id - 1) % 5) + 1,
                    'supplier_id' => $supplier,
                    'barang_kode' => 'BR'.str_pad($id,2,'0',STR_PAD_LEFT),
                    'barang_nama' => 'Barang '.$id,
                    'harga_beli'  => 10000 + ($id * 1000),
                    'harga_jual'  => 15000 + ($id * 1000),
                ];
                $id++;
            }
        }

        DB::table('m_barang')->insert($data);
    }
}
