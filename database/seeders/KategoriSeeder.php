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
        DB::table('m_kategori')->insert([
            ['kategori_id'=>1,'kategori_kode'=>'KT01','kategori_nama'=>'Baju'],
            ['kategori_id'=>2,'kategori_kode'=>'KT02','kategori_nama'=>'Celana'],
            ['kategori_id'=>3,'kategori_kode'=>'KT03','kategori_nama'=>'Sepatu'],
            ['kategori_id'=>4,'kategori_kode'=>'KT04','kategori_nama'=>'Jaket'],
            ['kategori_id'=>5,'kategori_kode'=>'KT05','kategori_nama'=>'topi'],
        ]);
    }
}
